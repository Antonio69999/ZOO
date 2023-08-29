<?php

    class Tiger extends Animal
    {
        public function __construct($name, $species, $weight, $height, $age)
        {
            $this->weight = $weight;
            $this->species = $species;
            $this->name = $name;
            $this->height = $height;
            $this->age = $age;
        }

        public function createTiger($newTiger, $weight, $species, $name, $height, $age)
        {
            $newTiger = new Tiger($name, $species, $weight, $height, $age);
            return $newTiger;
        }
        
    }