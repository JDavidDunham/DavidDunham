<!--
	Name:         	David Dunham
    Course:         INEW 2434-21001
    Assignment:		LAB 1 - SamFord
    Date:			03/04/2026
    File Name:		SamFord_While_Loop.php
    Description:    
-->

<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>SamFord While Loop - Vehicles</title>
    </head>

    <body>

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

        <h1>Ford Vehicle Lineup (While Loop)</h1>

        <table>

            <tr>
                <?php
                    $i = 0;
                    while ($i < 6) {
                        echo "<th>{$vehicleNames[$i]}</th>";
                        $i++;
                    }
                ?>
            </tr>

            <tr>
                <?php
                    $i = 0;
                    while ($i < 6) {
                        echo "<td style='text-align: center;'>{$vehicleTypes[$i]}</td>";
                        $i++;
                    }
                ?>
            </tr>

            <tr>
                <?php
                    $i = 0;
                    while ($i < 6) {
                        echo "<td><img src='{$vehicleImages[$i]}' alt='{$vehicleNames[$i]}'></td>";
                        $i++;
                    }
                ?>
            </tr>
            
        </table>

    </body>
    
</html>