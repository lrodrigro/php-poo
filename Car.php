<?php

//Class car

class Car 
{
    /**
    * @var integer
    */
    private $nbWheels;
    
    /**
    * @var integer
    */
    private $currentSpeed;

    /**
    * @var string
    */
    private $color;

    /**
    * @var integer
    */
    private $nbSeats;

    /**
    * @var string
    */
    private $energy;

    /**
    * @var integer
    */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->seatsNumber = $nbSeats;
        $this->energyType = $energy;
    }

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake() : string
    {
        $sentence = "";

        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }

        $sentence .= "I'm stopped !";

        return $sentence;
    }

    public function start()
    {
        
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

}