<?php
require_once('./config/autoload.php');
require_once('./config/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form.css">
    <title>Add Animals</title>
</head>

<body>
    <div class="container">
        <form id="contact" action="./process/process_form.php" method="post">
            <h3>Add Animal</h3>
            <fieldset>
                <input name="name" placeholder="Animal Name" type="text" tabindex="1" required min="0" autofocus>
            </fieldset>
            <fieldset>
                <input name="species" placeholder="Species" type="hidden" tabindex="1" autofocus>
                <select name="species" placeholder="Species">
                    <option value="">--Please choose a species</option>
                    <option value="Bear">Bear</option>
                    <option value="Eagle">Eagle</option>
                    <option value="Tiger">Tiger</option>
                    <option value="Fish">Axolotl</option>
                </select>
            </fieldset>
            <fieldset>
                <input name="weight" placeholder="Weight (kg)" type="number" tabindex="2" required min="0" required pattern="[0-9]+(\.[0-9]+)?">
            </fieldset>
            <fieldset>
                <input name="height" placeholder="Height (cm)" type="number" tabindex="3" required min="0" required pattern="[0-9]+">
            </fieldset>
            <fieldset>
                <input name="age" placeholder="Age" type="number" tabindex="4" required min="0" step="1" required pattern="[0-9]+">
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Let's Go </button>
            </fieldset>
            <p class="copyright">Have Fun !</p>
        </form>
    </div>


</body>

</html>