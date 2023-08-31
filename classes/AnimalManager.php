<?php

class   AnimalManager
{
    private object $db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    /**
     * Get the value of db
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set the value of db
     *
     * @return  self
     */
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    public function addAnimal(Animal $animal)
    {
        $sql = $this->db->prepare("
            INSERT INTO animals (name, weight, height, species, age) 
            VALUES (:name, :weight, :height, :species, :age )");
        $sql->execute(array(
            ':name' => $animal->getName(),
            ':weight' => $animal->getWeight(),
            ':height' => $animal->getHeight(),
            ':species' => $animal->getSpecies(),
            ':age' => $animal->getAge(),
        ));

        $id = $this->db->lastInsertId();
        $animal->setIdAnimal($id);
    }

    public function findAllTigers()
    {
        $sql = "SELECT * FROM animals WHERE species = 'Tiger'";
        $result = $this->db->query($sql);
        $tigers = $result->fetchAll(PDO::FETCH_ASSOC);
        $tigers_array = [];

        foreach ($tigers as $tiger) {
            $tigers_array[] = new Tiger($tiger);
        }
        return $tigers_array;
    }

    public function getTigerNamesWithIds()
    {
        $sql = "SELECT id_animals, name FROM animals WHERE id_enclosure = 0";
        $result = $this->db->query($sql);
        $tigers = $result->fetchAll(PDO::FETCH_ASSOC);

        return $tigers;
    }

    
}
