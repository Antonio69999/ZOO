<?php
require_once('./config/autoload.php');
require_once('./config/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form_enclosure.css">
    <title>Add Enclosure</title>
</head>

<body>
    <div class="container">
        <form id="enclosure" action="./process/process_enclosure.php" method="post">
            <h3>Add Enclosure</h3>
            <fieldset>
                <input name="name" placeholder="Animal Name" type="text" tabindex="1" required min="0" autofocus>
            </fieldset>
            <fieldset>
                <input name="species" placeholder="Species" type="hidden" tabindex="1" autofocus>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Let's Go </button>
            </fieldset>
            <p class="copyright">Have Fun !</p>
        </form>
    </div>


</body>

</html>