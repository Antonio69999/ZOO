<?php 

    class   Enclosure
    {
        private string $name;
        private bool $isClean = true;
        private int $attendingAnimals = 0;
        private array $animals = [];

        public function __construct($name)
        {
            $this->name = $name;
        }

        

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of cleanliness
         */ 
        public function getisClean()
        {
                return $this->isClean;
        }

        /**
         * Set the value of cleanliness
         *
         * @return  self
         */ 
        public function setisClean($isClean)
        {
                $this->isClean = $isClean;

                return $this;
        }

        /**
         * Get the value of attendingAnimals
         */ 
        public function getAttendingAnimals()
        {
                return $this->attendingAnimals;
        }

        /**
         * Set the value of attendingAnimals
         *
         * @return  self
         */ 
        public function setAttendingAnimals($attendingAnimals)
        {
                $this->attendingAnimals = $attendingAnimals;

                return $this;
        }

         /**
         * Get the value of animals
         */ 
        public function getAnimals()
        {
                return $this->animals;
        }

        /**
         * Set the value of animals
         *
         * @return  self
         */ 
        public function setAnimals($animals)
        {
                $this->animals = $animals;

                return $this;
        }

        public function enclosureDetails(Animal $animal)
        {
            return $animal->displayAnimalInfo();
        }
        

        public function cleanEnclosure()
        {
            if ($this->getisClean())
            {
                return 'The enclosure is clean';
            }

            $this->setIsClean(true);
            return 'The enclosure has been cleaned successfully';

        }

        public function addAnimals($animal)
        {
            
            
        }
       
    }