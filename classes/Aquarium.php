<?php

class Aquarium extends Enclosure
{
    private int $salinity;

    /**
     * Get the value of salinity
     */
    public function getSalinity()
    {
        return $this->salinity;
    }

    /**
     * Set the value of salinity
     *
     * @return  self
     */
    public function setSalinity($salinity)
    {
        $this->salinity = $salinity;

        return $this;
    }
}
