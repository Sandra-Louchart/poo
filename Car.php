<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES =[
        'fuel',
        'electric',
    ];
    private $energy;
    private $energyLevel;
    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function forward() : string
    {
        $this->currentSpeed = 50;
        return "Cruising speed! ";
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): car
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }
    public function hasParkBrake()
    {
        return $this->hasParkBrake;
    }
    public function start()
    {
        if ($this->hasParkBrake===true) {
            throw new Exception ('the parkbrake is on');
        }else{ $message = 'Car is on'; }
        return $message;
    }

    public function switchOn()
    {
        return true;
    }

    public function switchOff()
    {
        return false;
    }

}
