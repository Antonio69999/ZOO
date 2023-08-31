<?php

require_once('../config/db.php');
require_once('../config/autoload.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_enclosure = $_POST['enclosure']; 
    $id_animals = $_POST['animal'];


    $sql = 'UPDATE animals SET id_enclosure = :id_enclosure WHERE id_animals = :id_animals'; 
    $stmt = $db->prepare($sql);

    $stmt->bindValue(':id_enclosure', $id_enclosure, PDO::PARAM_INT);
    $stmt->bindValue(':id_animals', $id_animals, PDO::PARAM_INT);

    $result = $stmt->execute();

    if ($result) {
        header('Location: ../animals.php');
    } else {
        // Handle the case where the update query fails
        echo "Update failed";
    }
}
?>
