<?php 

    class   Fish extends Animal
    {
        public function __construct($weight, $species, $name, $height, $age)
        {
            $this->weight = $weight;
            $this->species = $species;
            $this->name = $name;
            $this->height = $height;
            $this->age = $age;
        }

        public function createFish($newFish, $weight, $species, $name, $height, $age)
        {
            $newFish = new Fish($name, $species, $weight, $height, $age);
            return $newFish;
        }
        
    }