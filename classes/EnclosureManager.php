<?php

class   EnclosureManager
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

    public function addEnclosure(Enclosure $enclosure)
    {
        $sql = $this->db->prepare("
            INSERT INTO enclosure (name) 
            VALUES (:name)");
        $sql->execute(array(
            ':name' => $enclosure->getName(),
        ));

        $id = $this->db->lastInsertId();
        $enclosure->setIdEnclosure($id);
    }

    public function findAllEnclosure()
    {
        $sql = "SELECT * FROM enclosure";
        $result = $this->db->query($sql);
        $enclosures = $result->fetchAll(PDO::FETCH_ASSOC);
        $enclosures_array = [];

        foreach ($enclosures as $enclosure) {
            $enclosures_array[] = new Enclosure($enclosure);
        }
        return $enclosures_array;
    }
}