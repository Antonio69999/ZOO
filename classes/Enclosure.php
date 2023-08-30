<?php

class Enclosure
{
    private string $name;
    private bool $isClean = true;
    private int $attendingAnimals = 0; // Use the correct property name
    private array $animals = []; // Store currently present animals

    public function __construct($name)
    {
        $this->name = $name;
        $this->attendingAnimals = 0; // Initialize attendingAnimals, not animalCount
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

    ////////////////////////////////////////////////////////////////////////

    public function displayAnimalDetails(Animal $animal)
    {
        foreach ($this->animals as $animal) {
            echo "Animal Details:";
            return $animal->displayAnimalInfo() . "<br>";
        }
    }

    public function displayEnclosureDetails()
    {
        echo "Enclosure Name: " . $this->name . "<br>";
        echo " Cleanliness: " . $this->isClean . "<br>";
        echo " Number of Attending Animals: " . $this->attendingAnimals . "<br>";
    }



    public function cleanEnclosure()
    {
        if ($this->getisClean()) {
            return 'The enclosure is clean';
        }

        $this->setIsClean(true);
        return 'The enclosure has been cleaned successfully';
    }

    public function addAnimalsInEnclosure(Animal $animal)
    {
        if ($this->getAttendingAnimals() < 6) {
            $this->animals[] = $animal;
            $this->setAttendingAnimals($this->getAttendingAnimals() + 1);
            return "An animal has been added to the enclosure: " . $animal->getName();
        } else {
            return 'The enclosure is full';
        }
    }

    public function displayAllAnimalsInEnclosure()
    {
        foreach ($this->getAnimals() as $animal) {
            $animal->displayAnimalInfo();
            "<br>";
        }
    }
}
