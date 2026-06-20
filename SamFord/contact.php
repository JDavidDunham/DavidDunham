<!--
	Name:         	David Dunham
    Course:       INEW 2434-21001
    Assignment:	LAB 3 - SamFord
    Date:			04/16/2026
    File Name:		Customerinfo.php
    Description:  Sam Allen Ford - Customer Information / Form
-->

<!doctype html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Customer Information Form</title>
		<link rel="stylesheet" href="SamFord.css">
	
    </head>

	<body>

        <header class="header">
            <?php 
				ini_set('display_errors', 1);
				error_reporting(E_ALL);
				include("includes/inc_site_counter.php"); 
			?>
        	<?php include("includes/inc_header.php"); ?>
		</header>

        <nav class="main_nav">
	        <?php include("includes/inc_nav.php"); ?>
		</nav>

        <main id="customer_info">

            <?php

                // Initialize variables
                $first = $last = $address = $city = $state = $zip = "";
                $phone = $email = $contact = $bday = $interest = "";
                $errorMsg = "";

                // PROCESS FORM WHEN SUBMITTED
                if (isset($_POST['submit'])) {
                    $first = trim($_POST['first']);
                    $last = trim($_POST['last']);
                    $address = trim($_POST['address']);
                    $city = trim($_POST['city']);
                    $state = trim($_POST['state']);
                    $zip = trim($_POST['zip']);
                    $phone = trim($_POST['phone']);
                    $email = trim($_POST['email']);
                    $contact = isset($_POST['contact']) ? trim($_POST['contact']) : "";
                    $bday = trim($_POST['bday']);
                    $interest = trim($_POST['interest']);

                    // REQUIRED FIELD CHECKS
                    if ($first == "" || $last == "" || $email == "" || $phone == "") {
                        $errorMsg .= "<p>You must enter first name, last name, email, and phone.</p>";
                    }

                    // AGE VALIDATION (must be 18+)
                    if ($bday != "") {
                        $birthdate = DateTime::createFromFormat("m/d/Y", $bday);

                        if ($birthdate) {
                            $today = new DateTime();
                            $age = $today->diff($birthdate)->y;

                            if ($age < 18) {
                                $errorMsg .= "<p>You must be at least 18 years old.</p>";
                            }
                        } else {
                            $errorMsg .= "<p>Birthdate must be in mm/dd/yyyy format.</p>";
                        }
                    }

                    // Check for Errors
                    if ($errorMsg == "") {
                        echo "<h2>Thank you, $first. Your information has been submitted.</h2>";
                        include("includes/inc_footer.php");
                        exit;
                    }
                }
            ?>

            <h1 style="margin-left: 20px;">Customer Information Form</h1>

            <!-- Display errors -->
            <?php
                if ($errorMsg != "") {
                    echo "<div style='color:red;'>$errorMsg</div>";
                }
            ?>

            <!-- Customer Information Form -->
            <form method="post" action="Customerinfo.php" style="padding-left: 20px;">

                <label>First Name:</label><br>
                    <input type="text" name="first" maxlength="50" placeholder="John" required value="<?= $first ?>"><br><br>

                <label>Last Name:</label><br>
                    <input type="text" name="last" maxlength="50" placeholder="Doe" required value="<?= $last ?>"><br><br>

                <label>Address:</label><br>
                    <input type="text" name="address" maxlength="50" placeholder="123 Main St" value="<?= $address ?>"><br><br>

                <label>City:</label><br>
                    <input type="text" name="city" maxlength="35" placeholder="Anywhere" value="<?= $city ?>"><br><br>

                <label>State:</label><br>
                    <input type="text" name="state" maxlength="2" placeholder="ST" value="<?= $state ?>"><br><br>

                <label>Zip:</label><br>
                    <input type="text" name="zip" maxlength="5" placeholder="12345" value="<?= $zip ?>"><br><br>

                <label>Phone:</label><br>
                    <input type="text" name="phone" maxlength="14" placeholder="(123) 456-7890" 
                        required value="<?= $phone ?>"><br><br>

                <label>Email:</label><br>
                    <input type="email" name="email" maxlength="50" placeholder="john.doe@example.com" 
                        required value="<?= $email ?>"><br><br>

                <label>Contact Preference:</label><br>
                    <input type="checkbox" name="contact" value="email" <?= ($contact=="email"?"checked":"") ?>> Email <br>
                    <input type="checkbox" name="contact" value="phone" <?= ($contact=="phone"?"checked":"") ?>> Phone <br><br>

                <label>Birthdate:</label><br>
                    <input type="text" name="bday" maxlength="10" placeholder="12/31/1980" value="<?= $bday ?>"><br><br>

                <label>What is the contact about?</label><br>
                    <textarea name="interest" maxlength="1000" placeholder="How may we help you?" 
                    style="width:400px; height:150px;"><?= $interest ?></textarea><br><br>

                <input type="reset" value="Clear Fields">
                <input type="submit" value="Submit Form" style="margin-left: 20px;">

            </form>

		</main>

        <footer class="footer">
			<?php include("includes/inc_footer.php"); ?>
		</footer>

    </body>
	
</html>