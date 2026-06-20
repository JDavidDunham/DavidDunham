<!-- inc_site_counter.php -->

<?php
	// Always include connection using absolute path
	include_once("includes/inc_connect.php");

	// Default value
	$visitors = 0;

	if ($DBConnect) {

		// Check if this user already visited
		if (!isset($_COOKIE["visits"])) {

			// Increment counter
			mysqli_query($DBConnect,
				"UPDATE visit_counter SET counter = counter + 1 WHERE id = 1"
			);

			// Get updated count
			$result = mysqli_query($DBConnect,
				"SELECT counter FROM visit_counter WHERE id = 1"
			);

			if ($row = mysqli_fetch_assoc($result)) {
				$visitors = $row['counter'];
			} else {
				$visitors = 1;
			}

			// Store visit in cookie (1 day)
			setcookie("visits", $visitors, time() + (60 * 60 * 24));

		} else {
			// Use stored value
			$visitors = $_COOKIE["visits"];
		}
	}
?>