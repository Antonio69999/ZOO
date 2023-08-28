<?php 

    class   Aviary extends Enclosure
    {
        private int $hight;

        public function __construct($name, $hight)
        {
            parent::__construct($name);
            $this->hight = $hight;
        }


        /**
         * Get the value of hauteur
         */ 
        public function getHight()
        {
                return $this->hight;
        }

        /**
         * Set the value of hauteur
         *
         * @return  self
         */ 
        public function setHauteur($hight)
        {
                $this->hight = $hight;

                return $this;
        }
    }