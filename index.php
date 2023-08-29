<?php
require_once('./config/autoload.php');
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
        <form id="contact" action="animals.php" method="post">
            <h3>Add Animal</h3>
            <fieldset>
                <input name="name" placeholder="Animal Name" type="text" tabindex="1" required min="0" autofocus>
            </fieldset>
            <fieldset>
                <input name="species" placeholder="Species" type="text" tabindex="1" autofocus>
            </fieldset>
            <fieldset>
                <input name="weight" placeholder="Weight (kg)" type="text" tabindex="2" required min="0" required pattern="[0-9]+(\.[0-9]+)?">
            </fieldset>
            <fieldset>
                <input name="height" placeholder="Height (cm)" type="text" tabindex="3" required min="0" required pattern="[0-9]+">
            </fieldset>
            <fieldset>
                <input name="age" placeholder="Age" type="text" tabindex="4" required min="0" step="1" required pattern="[0-9]+">
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Let's Go </button>
            </fieldset>
            <p class="copyright">Have Fun !</p>
        </form>
    </div>


</body>

</html>