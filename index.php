<?php
include_once('./config/autoload.php');
include_once('./config/db.php');
include('./classes/AnimalManager.php');
include('./classes/EnclosureManager.php');


$animalManager = new AnimalManager($db);
$enclosureManager = new EnclosureManager($db);

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
        <a href="./animals.php">
            <button class="bubbly-button">Add Animal</button>
        </a>
        <a href="./addEnclosure.php">
            <button class="bubbly-button">Add Enclosure</button>
        </a>
        <a href="./addAnimalEnclosure.php">
            <button class="bubbly-button">Add Animal to Enclosure</button>
        </a>
    </div>

    <!-- ANIMALS -->

    <div class="animals">

        <div class="animals__tiger">
            <?php
            $tigers_array = $animalManager->findAllTigers();
            foreach ($tigers_array as $tiger) {
                $tiger->displayAnimalInfo($tiger);
            }
            ?>
        </div>

        <div class="animals__axolotl">

        </div>

        <div class="animals__bear">

        </div>

        <div class="animals__eagle">



        </div>

    </div>

    <!-- ENCLOSURES -->
    <div class="enclosures">
        <div class="enclosures__tiger">
            <?php
            $enclosureId = 2;

            $enclosures_array = $enclosureManager->findAllEnclosure();

            foreach ($enclosures_array as $enclosure) {

                if ($enclosure->getIdEnclosure() === $enclosureId) {
                    $tigersArray = $enclosure->findAllTigerInTigerEnclosure($enclosureManager, $enclosureId);
                    foreach ($tigersArray as $tiger) {
                        $tiger->displayAnimalInfo($tiger);
                    }
                }
            }

            ?>


        </div>

        <div class="enclosures__fish">

        </div>

        <div class="enclosures__bear">
            <?php
            $enclosureId = 3;

            $enclosures_array = $enclosureManager->findAllEnclosure();

            foreach ($enclosures_array as $enclosure) {

                if ($enclosure->getIdEnclosure() === $enclosureId) {
                    $BearsArray = $enclosure->findAllBearInBearEnclosure($enclosureManager, $enclosureId);
                    foreach ($BearsArray as $bear) {
                        $bear->displayAnimalInfo($bear);
                    }
                }
            }
            ?>
        </div>

        <div class="enclosures__eagle">

        </div>
    </div>

</body>

</html>