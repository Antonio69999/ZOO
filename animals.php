<?php
include_once('./config/autoload.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/addButton.css">
    <script src="./script/button.js"></script>
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

    <!-- ADD ANIMALS -->

    <div class="add">
        <a href="./index.php">
            <button class="bubbly-button">Add Animal</button>
        </a>
    </div>

    <!-- FORM CHECK -->
    <?php
    $tigerEnclosure = new Enclosure("Tiger's Enclosure");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $species = $_POST['species'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $age = $_POST['age'];

        //Create an instance of the animal
        $_SESSION = new Tiger($name, $species, $weight, $height, $age);

        //Add the new animal to the enclosure
        $tigerEnclosure->addAnimals($newTiger); //$tigerEnclosure is an instance of Enclosure
    }

    ?>

    <!-- ANIMALS -->

    <!-- <div class="animals">

        <div class="animals__tiger">
            
        </div>

        <div class="animals__axolotl">
        
        </div>

        <div class="animals__bear">
        
        </div>

        <div class="animals__eagle">
            

            
        </div>

    </div> -->

    <!-- ENCLOSURES -->
    <div class="enclosures">
        <div class="enclosures__tiger">
            <?php

            echo $tigerEnclosure->getAttendingAnimals() . " animal(s) are in the enclosure. " . "<br>";
            echo $tigerEnclosure->displayEnclosureDetails();
            echo $tigerEnclosure->displayAllAnimalsInEnclosure(); // Display all animals in the tiger enclosure
            ?>

        </div>

        <div class="enclosures__fish">
            <?php
            // echo $fishEnclosure->getAttendingAnimals() . " animal(s) are in the enclosure." . "<br>";
            // echo $fishEnclosure->displayEnclosureDetails();
            // echo $fishEnclosure->displayAllAnimalsInEnclosure(); // Display all animals in the fish enclosure
            ?>

        </div>

        <div class="enclosures__bear">

        </div>

        <div class="enclosures__eagle">

        </div>
    </div>

</body>

</html>