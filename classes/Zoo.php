<?php 

    class   Zoo
    {
        private string $name;
        private  array $enclosure;
        private array $employee;

        /**
         * Get the value of enclosure
         */ 
        public function getEnclosure()
        {
                return $this->enclosure;
        }

        /**
         * Set the value of enclosure
         *
         * @return  self
         */ 
        public function setEnclosure($enclosure)
        {
                $this->enclosure = $enclosure;

                return $this;
        }

        /**
         * Get the value of employee
         */ 
        public function getEmployee()
        {
                return $this->employee;
        }

        /**
         * Set the value of employee
         *
         * @return  self
         */ 
        public function setEmployee($employee)
        {
                $this->employee = $employee;

                return $this;
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
    }
?>