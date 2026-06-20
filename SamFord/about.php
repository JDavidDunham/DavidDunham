<!--
	Name:         	David Dunham
    Course:         INEW 2434-21001
    Assignment:		LAB 2 - SamFord
    Date:			04/08/2026
    File Name:		about.php
    Description:    dealer history text inserted
-->

<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>About Us</title>
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

        <main id="about">
	        <?php include("includes/inc_dealer.php"); ?>
		</main>

        <footer class="footer">
			<?php include("includes/inc_footer.php"); ?>
		</footer>

    </body>

</html>