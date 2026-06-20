<!-- inc_connect.php -->

	<?php
		// Database Name
		$db_name = "SAFdatabase";

		// Database Connection
		$DBConnect = @mysqli_connect("localhost", "root", "root", $db_name);

		if ($DBConnect === FALSE) {
			// Displays an error message if the database connection fails
			echo "<p>Unable to connect to the database server.</p>"
				. "<p>Error code " . mysqli_connect_errno()
				. ": " . mysqli_connect_error() . "</p>";
		}
		else {
			// Selects the database
			$db = @mysqli_select_db($DBConnect, $db_name);

			if ($db === FALSE) {
				// Displays an error message if the database cannot be selected
				echo "<p>Unable to select the database.</p>"
					. "<p>Error code " . mysqli_errno($DBConnect)
					. ": " . mysqli_error($DBConnect) . "</p>";
				@mysqli_close($DBConnect);
				$DBConnect = FALSE;
			}
		}
	?>
