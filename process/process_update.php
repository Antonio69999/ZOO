<?php
require_once('../config/db.php');
require_once('../config/autoload.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_enclosure = $_POST['enclosure'];
    $id_animals = $_POST['animal'];
    $species = $_POST['species'];

    $enclosureId = null;
    switch ($species) {
        case 'Tiger':
            $enclosureId = 2;
            break;
        case 'Bear':
            $enclosureId = 3;
            break;
    }

    if ($enclosureId !== null) {
        $sql = 'UPDATE animals SET id_enclosure = :id_enclosure WHERE id_animals = :id_animals AND species = :species';
        $stmt = $db->prepare($sql);

        $stmt->bindValue(':id_enclosure', $enclosureId, PDO::PARAM_INT);
        $stmt->bindValue(':id_animals', $id_animals, PDO::PARAM_INT);
        $stmt->bindValue(':species', $species, PDO::PARAM_STR);

        $result = $stmt->execute();

        if ($result) {
            header('Location: ../index.php');
        } else {
            // Handle the case where the update query fails
            echo "Update failed";
        }
    }
}

?>
