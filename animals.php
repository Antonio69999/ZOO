<?php
include_once('./config/autoload.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>ZOO</title>
</head>

<body>

    <header>
        <h1>
            <span class="letters_color">W</span>elcome 
            <span class="letters_color">T</span>o 
            <span class="letters_color">M</span>y 
            <span class="letters_color">Z</span>oo !
        </h1>
    </header>

    <!-- ANIMALS -->

    <div class="animals">

        <div class="animals__tiger">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = ($_POST["name"]);
                $species = ($_POST["species"]);
                $weight = ($_POST["weight"]);
                $height = ($_POST["height"]);
                $age = ($_POST["age"]);
            
                $newTiger = new Tiger($name, $species, $weight, $height, $age);
                $_SESSION['newTiger'] = $newTiger;
            } else {
                if (isset($_SESSION['newTiger'])) {
                    $newTiger = $_SESSION['newTiger'];
                }
            }

            ?>

            <?php
            if (isset($newTiger)) {
            echo "New Animal Created: <br>";
            $newTiger->displayAnimalInfo();
            }
            ?>
        </div>

        <div class="animals__axolotl">
            <?php
            
            ?>
        </div>

        <div class="animals__bear">
            <!-- <img src="./assets/bouba.jpg" alt="bouba" width="250px"> -->
            <?php
             
            ?>
        </div>

        <div class="animals__eagle">
            <?php
            
            ?>
        </div>

    </div>

    <!-- ENCLOSURES -->
    <div class="enclosures">
        <div class="enclosures__tiger">
            <?php
            $enclosure = new Enclosure(" Tiger Enclosure ");
            echo $enclosure->addAnimals($newTiger) . "<br>";
            


            echo $enclosure->getAttendingAnimals() . " animal(s) are/is in the enclosure. " . "<br>";
            echo $enclosure->displayEnclosureDetails();

            echo $enclosure->displayAllAnimalsInEnclosure();

            ?>
        </div>

        <div class="enclosures__fish">

        </div>

        <div class="enclosures__bear">

        </div>

        <div class="enclosures__eagle">

        </div>
    </div>

</body>

</html>