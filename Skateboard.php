<?php

require_once 'Vehicle.php';

class Skateboard extends Vehicle
{
    public function forward()
    {
        $this->currentSpeed = 10;

        return "Go !";
    }


}