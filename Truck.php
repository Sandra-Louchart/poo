<?php

require_once 'Vehicle.php';
class Truck extends Vehicle
{
    const ALLOWED_ENERGIES =[
        'fuel',
        'electric',
    ];
    private $storageCapacity;
    private $cargo = 0;
    private $energy;
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function fullCargo() : string
    {
        if($this->storageCapacity===$this->cargo){
            return 'Full';
        } else {
            return 'In filling';
        }
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

    public function getStorageCapacity():int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity) : void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getCargo(): int
    {
        return $this->cargo;
    }

    public function setCargo(int $cargo) : void
    {
        $this->cargo = $cargo;
    }
}