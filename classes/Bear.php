<?php 

    class   Bear extends Animal
    {
        public function __construct($weight, $species, $name, $height, $age)
        {
            $this->weight = $weight;
            $this->species = $species;
            $this->name = $name;
            $this->height = $height;
            $this->age = $age;
        }

        public function createBear($newBear, $weight, $species, $name, $height, $age)
        {
            $newBear = new Bear($name, $species, $weight, $height, $age);
            return $newBear;
        }
        
    }