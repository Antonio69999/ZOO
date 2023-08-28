<?php 

    class   Fish extends Animal
    {
        public function __construct($weight, $name, $height, $age)
        {
            $this->weight = $weight;
            $this->name = $name;
            $this->height = $height;
            $this->age = $age;
            
        }
        
    }