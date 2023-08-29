<?php 

    class   Eagle extends Animal
    {

        public function createEagle($newEagle, $weight, $species, $name, $height, $age)
        {
            $newEagle = new Eagle($name, $species, $weight, $height, $age);
            return $newEagle;
        }
    }