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

<div class="animals">

    <div class="animals__tiger">
    <?php
    $tiger = new Tiger(90, 'Tigrou', 200, 6);
    echo $tiger->displayAnimalInfo();
    ?>
    </div>

    <div class="animals__axolotl">
    <?php
    $eagle = new Fish(0.11, 'Xoxo', 20, 3);
    echo $eagle->displayAnimalInfo();
    ?>
    </div>

    <div class="animals__bear">
        <!-- <img src="./assets/bouba.jpg" alt="bouba" width="250px"> -->
    <?php
    $eagle = new Bear(200, 'Bouba l\'Ourson', 180, 2);
    echo $eagle->displayAnimalInfo();
    ?>
    </div>

    <div class="animals__eagle">
    <?php
    $eagle = new Eagle(6.3, 'Desert Eagle', 200, 14);
    echo $eagle->displayAnimalInfo();
    ?>
    </div>

</div>

</body>

</html>