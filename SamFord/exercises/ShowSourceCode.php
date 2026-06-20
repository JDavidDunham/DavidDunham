<!--
	Name:         	David Dunham
    Course:         INEW 2434-21001
    Assignment:		LAB 3 - SamFord
    Date:			04/16/2026
    File Name:		Customerinfo.php
    Description:    Sam Allen Ford - Customer Information / Form
-->

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Show Source Code</title>
        <link rel="stylesheet" href="SamFord.css">
    </head>

    <body>

        <?php
            if (isset($_GET['source_file'])) {

                $SourceFile = file_get_contents(stripslashes($_GET['source_file']));
                highlight_string($SourceFile);

            }
            else {
                echo "<p>No source file specified. Nothing to display!</p>\n";
            }
        ?>

    </body>

</html>