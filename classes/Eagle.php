<?php 

    class   Eagle extends Animal
    {
        public function __construct($weight, $species, $name, $height, $age)
        {
            $this->weight = $weight;
            $this->species = $species;
            $this->name = $name;
            $this->height = $height;
            $this->age = $age;
        }

        public function createEagle($newEagle, $weight, $species, $name, $height, $age)
        {
            $newEagle = new Eagle($name, $species, $weight, $height, $age);
            return $newEagle;
        }
    }