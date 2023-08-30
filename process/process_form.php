<?php 

require_once('../config/db.php');
require_once('../config/autoload.php');
require_once('../classes/AnimalManager.php');

var_dump($_POST);

if($_POST['species'] == 'Bear') {

$animal = new Bear();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $animalManager = new AnimalManager($db);
    $animal->setName($_POST['name']);
    $animal->setWeight($_POST['weight']);
    $animal->setHeight($_POST['height']);
    $animal->setSpecies($_POST['species']);
    $animal->setAge($_POST['age']);

    $animalManager->addAnimal($animal);

    header('Location: ../animals.php');
}

}

if($_POST['species'] == 'Tiger') {

    $animal = new Tiger();
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $animalManager = new AnimalManager($db);
        $animal->setName($_POST['name']);
        $animal->setWeight($_POST['weight']);
        $animal->setHeight($_POST['height']);
        $animal->setSpecies($_POST['species']);
        $animal->setAge($_POST['age']);
    
        $animalManager->addAnimal($animal);
    
        header('Location: ../animals.php');
    }
    
    }

    if($_POST['species'] == 'Eagle') {

        $animal = new Eagle();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $animalManager = new AnimalManager($db);
            $animal->setName($_POST['name']);
            $animal->setWeight($_POST['weight']);
            $animal->setHeight($_POST['height']);
            $animal->setSpecies($_POST['species']);
            $animal->setAge($_POST['age']);
        
            $animalManager->addAnimal($animal);
        
            header('Location: ../animals.php');
        }
        
        }

        if($_POST['species'] == 'Axolotl') {

            $animal = new Fish();
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $animalManager = new AnimalManager($db);
                $animal->setName($_POST['name']);
                $animal->setWeight($_POST['weight']);
                $animal->setHeight($_POST['height']);
                $animal->setSpecies($_POST['species']);
                $animal->setAge($_POST['age']);
            
                $animalManager->addAnimal($animal);
            
                header('Location: ../animals.php');
            }
            
            }

?>