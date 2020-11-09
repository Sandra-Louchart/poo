<?php

abstract class HighWay
{
    protected $currentVehicle;
    protected $nbLane;
    protected $maxSpeed;



    public function getCurrentVehicle(): array
    {
        return $this->currentVehicle;
    }

    public function setCurrentVehicle(array $currentVehicle) : void
    {
        $this->currentVehicle = $currentVehicle;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    abstract protected function addVehicle($vehicle);
}