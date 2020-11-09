<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
        parent::setNbLane(4);
        parent::setMaxSpeed(130);
    }

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            return 'Too dangerous son';
        } else {
            $this -> currentVehicles [] = $vehicle;
            return $this -> currentVehicles;
        }
    }
}