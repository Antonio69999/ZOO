<?php 

    class   Bear extends Animal
    {
        public function createBear($newBear, $weight, $species, $name, $height, $age)
        {
            $newBear = new Bear($name, $species, $weight, $height, $age);
            return $newBear;
        }
        
    }