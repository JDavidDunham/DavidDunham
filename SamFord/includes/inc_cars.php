<!-- inc_cars.php -->

<?php
	$vehicleNames = array("Bronco", "Escape","Expedition", "Explorer", "F-150", "Mustang");
	$vehicleTypes = array("Off-Road", "Compact SUV", "Full-Size SUV", "SUV", "Truck", "Sports Car");
	$vehicleImages = array(
		 "images/Bronco.jpg",    
		 "images/Escape.jpg",
		 "images/Expedition.jpg",
		 "images/Explorer.jpg",
		 "images/F150.jpg",
		 "images/Mustang.jpg"
	);
?>

<h1 style="padding: 20px;">Ford Vehicle Lineup</h1>

<table>

	<tr>
		 <?php
			  $i = 0;
			  while ($i < 6) {
					echo "<th style='border: none;'>{$vehicleNames[$i]}</th>";
					$i++;
			  }
		 ?>
	</tr>

	<tr>
		 <?php
			  $i = 0;
			  while ($i < 6) {
					echo "<td style='border: none; text-align: center;'>{$vehicleTypes[$i]}</td>";
					$i++;
			  }
		 ?>
	</tr>

	<tr>
		 <?php
			  $i = 0;
			  while ($i < 6) {
					echo "<td style='border: none;'><img src='{$vehicleImages[$i]}' alt='{$vehicleNames[$i]}'></td>";
					$i++;
			  }
		 ?>
	</tr>
	
</table>