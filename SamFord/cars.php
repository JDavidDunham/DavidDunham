<!--
	Name:         	David Dunham
    Course:       INEW 2434-21001
    Assignment:	LAB 1 - SamFord
    Date:			06/18/2026
    File Name:		Vehicles.php
    Description:  Sam Allen Ford - Home Page
-->

<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sam Ford</title>
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

		<main id="cars">
		  <?php include("includes/inc_cars.php"); ?>
		</main>
		
		<footer class="footer">
			<?php include("includes/inc_footer.php"); ?>
		</footer>

	</body>
	
</html>