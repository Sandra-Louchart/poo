<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle
{
    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function switchOn()
    {
        if ($this->currentSpeed > 10) {
            return true;
        } else {
            return false;
        }
    }

    public function switchOff()
    {
        return false;
    }
}