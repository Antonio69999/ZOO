<?php
require_once('./config/autoload.php');
require_once('./config/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/formAddAnimaltoEnclosure.css">
    <title>Add Enclosure</title>
</head>

<body>
    <div class="container">
        <form id="add_enclosure" action="./process/process_update.php" method="post">
            <h3>Add Animal to Enclosure</h3>
            <fieldset>
                <select name="animal" id="animal">
                    <?php
                    $animalManager = new AnimalManager($db);
                    $tigerNamesWithIds = $animalManager->getTigerNamesWithIds();

                    foreach ($tigerNamesWithIds as $tiger) {
                        echo '<option value="' . $tiger['id_animals'] . '">' . $tiger['name']  . '</option>';
                    }
                    ?>
                </select>
                <?php
                ?>
            </fieldset>
            <fieldset>
                <select name="species" id="species">
                    <option value="Tiger">Tiger</option>
                    <option value="Bear">Bear</option>
                </select>

            </fieldset>
            <fieldset>
                <select name="enclosure" id="enclosure">
                    <?php
                    $enclosureManager = new EnclosureManager($db);
                    $enclosuresWithIds = $enclosureManager->findEnclosuresWithIds();

                    foreach ($enclosuresWithIds as $enclosure) {
                        echo '<option value="' . $enclosure['id_enclosure'] . '">' . $enclosure['name'] . '</option>';
                    }
                    ?>
                </select>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Let's Go</button>
            </fieldset>
        </form>
    </div>
</body>

</html>