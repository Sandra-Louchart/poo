<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        parent::setNbLane(2);
        parent::setMaxSpeed(50);
    }

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Car and $this instanceof Truck){
            $currentVehicles[] = $vehicle;
        }
    }
}