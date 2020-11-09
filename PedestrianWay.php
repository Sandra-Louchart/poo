<?php

require 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        parent::setNbLane(1);
        parent::setMaxSpeed(10);
    }

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bicycle){
            $currentVehicles[] = $vehicle;
        }
    }


}