<?php

abstract class   Animal
{
        protected string $weight;
        protected string $height;
        protected string $name;
        protected string $species;
        protected int $age;

        protected bool $isHungry = false;
        protected bool $isSleeping = false;
        protected bool $isSick = false;



        /**
         * Get the value of weight
         */
        public function getWeight()
        {
                return $this->weight;
        }

        /**
         * Set the value of weight
         *
         * @return  self
         */
        public function setWeight($weight)
        {
                $this->weight = $weight;

                return $this;
        }

        /**
         * Get the value of height
         */
        public function getHeight()
        {
                return $this->height;
        }

        /**
         * Set the value of height
         *
         * @return  self
         */
        public function setHeight($height)
        {
                $this->height = $height;

                return $this;
        }

        /**
         * Get the value of species
         */
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of species
         *
         * @return  self
         */
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of age
         */
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @return  self
         */
        public function setAge($age)
        {
                $this->age = $age;

                return $this;
        }

        /**
         * Get the value of isHungry
         */
        public function getIsHungry()
        {
                return $this->isHungry;
        }

        /**
         * Set the value of isHungry
         *
         * @return  self
         */
        public function setIsHungry($isHungry)
        {
                $this->isHungry = $isHungry;

                return $this;
        }

        /**
         * Get the value of isSleeping
         */
        public function getIsSleeping()
        {
                return $this->isSleeping;
        }

        /**
         * Set the value of isSleeping
         *
         * @return  self
         */
        public function setIsSleeping($isSleeping)
        {
                $this->isSleeping = $isSleeping;

                return $this;
        }

        /**
         * Get the value of isSick
         */
        public function getIsSick()
        {
                return $this->isSick;
        }

        /**
         * Set the value of isSick
         *
         * @return  self
         */
        public function setIsSick($isSick)
        {
                $this->isSick = $isSick;

                return $this;
        }

                /**
         * Get the value of species
         */ 
        public function getSpecies()
        {
                return $this->species;
        }

        /**
         * Set the value of species
         *
         * @return  self
         */ 
        public function setSpecies($species)
        {
                $this->species = $species;

                return $this;
        }


        public function displayAnimalInfo()
        {
                echo "Name : " . $this->getName() . "<br>";
                echo "Species : " . $this->getSpecies() . "<br>";
                echo "Height : " . $this->getHeight() . " cm " . "<br>";
                echo "Weight : " . $this->getWeight() . " kg " . "<br>";
                echo "Age : " . $this->getAge() . " y.o " . "<br>";
        }

        public function eat() : string
        {
                if ($this->getIsHungry())
                {
                        $this->setIsHungry(false);
                        return 'I\'m well fed';
                }

                return 'I\'m not hungry';

        }

        public function sleep() : string
        {
                if ($this->getIsSleeping())
                {
                        $this->setIsSleeping(true);
                        return 'I\'m sleeping, rompished...';
                }

                return 'I\'m awake';
        }

        public function sick() : string
        {
                if ($this->getIsSick())
                {
                        $this->setIsSick(true);
                        return 'Oh no I\'m sick...';
                }

                return 'I\'m in great shape ! ';
        }

}
