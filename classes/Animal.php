<?php

abstract class   Animal
{
        protected  $idAnimal;
        protected  $weight;
        protected  $height;
        protected  $name;
        protected  $species;
        protected  $age;
        protected $id_enclosure;

        protected bool $isHungry = false;
        protected bool $isSleeping = false;
        protected bool $isSick = false;

        public function __construct($animal)
        {
                $this->setName($animal['name'] ?? '');
                $this->setWeight($animal['weight'] ?? 0);
                $this->setHeight($animal['height'] ?? 0);
                $this->setSpecies($animal['species'] ?? '');
                $this->setAge($animal['age'] ?? 0);
        }



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

        /**
         * Get the value of idAnimal
         */
        public function getIdAnimal()
        {
                return $this->idAnimal;
        }

        /**
         * Set the value of idAnimal
         *
         * @return  self
         */
        public function setIdAnimal($idAnimal)
        {
                $this->idAnimal = $idAnimal;

                return $this;
        }

        /**
         * Get the value of id_enclosure
         */
        public function getId_enclosure()
        {
                return $this->id_enclosure;
        }

        /**
         * Set the value of id_enclosure
         *
         * @return  self
         */
        public function setId_enclosure($id_enclosure)
        {
                $this->id_enclosure = $id_enclosure;

                return $this;
        }



        public function displayAnimalInfo($animal)
        {
                echo "Name : " . $this->getName($animal) . "<br>";
                echo "Species : " . $this->getSpecies($animal) . "<br>";
                echo "Height : " . $this->getHeight($animal) . " cm " . "<br>";
                echo "Weight : " . $this->getWeight($animal) . " kg " . "<br>";
                echo "Age : " . $this->getAge($animal) . " y.o " . "<br>";
        }

        public function isHungry()
        {
                $isHungry = rand(0, 3);
                if ($isHungry == 0) {
                        return "" . $this->getName() . " is hungry";
                } else {
                        return "" . $this->getName() . " is well fed";
                }
        }

        public function sleep(): string
        {
                if ($this->getIsSleeping()) {
                        $this->setIsSleeping(true);
                        return 'I\'m sleeping, rompished...';
                }

                return 'I\'m awake';
        }

        public function sick(): string
        {
                if ($this->getIsSick()) {
                        $this->setIsSick(true);
                        return 'Oh no I\'m sick...';
                }

                return 'I\'m in great shape ! ';
        }
}
