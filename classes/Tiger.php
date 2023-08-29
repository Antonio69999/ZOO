<?php

    class Tiger extends Animal
    {

        public function createTiger($newTiger, $weight, $species, $name, $height, $age)
        {
            $newTiger = new Tiger($name, $species, $weight, $height, $age);
            return $newTiger;
        }
        
    }