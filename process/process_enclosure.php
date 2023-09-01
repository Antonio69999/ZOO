<?php 

require_once('../config/db.php');
require_once('../config/autoload.php');
require_once('../classes/AnimalManager.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $enclosure = new Enclosure($enclosure);
    $enclosureManager = new EnclosureManager($db);
    $enclosure->setName($_POST['name']);

    $enclosureManager->addEnclosure($enclosure);

    header('Location: ../index.php');
}
