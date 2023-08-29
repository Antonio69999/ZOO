<?php 

    class   Fish extends Animal
    {

        public function createFish($newFish, $weight, $species, $name, $height, $age)
        {
            $newFish = new Fish($name, $species, $weight, $height, $age);
            return $newFish;
        }
        
    }