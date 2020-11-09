<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Vehicle.php';


$bike = new Bicycle('pink', 2);
var_dump($bike);
$rockrider = new Bicycle('black', 4);
var_dump($rockrider);
$tornado = new Bicycle('red', 1);
var_dump($tornado);
$tornado->forward();

$fiat = new Car('orange',5,'95E10');
var_dump($fiat);
echo $fiat->forward();
var_dump(Car::ALLOWED_ENERGIES);

$food = new Truck('green', 3,'fuel',150);
var_dump($food);
echo $food->fullCargo();
$food->setCargo(150);
var_dump($food);
echo $food->getCargo();
echo $food->fullCargo();

$opel = new Car('purple',5,'fuel');
$opel->setParkBrake(true);
try{
    echo $opel->start();
}
catch (exception $exception){
    if($opel->hasParkBrake () === true){
        return $opel->setParkBrake(false);
    }
    echo $exception->getMessage();
} finally {
    echo 'Ma voiture roule comme un donut';
}

$bike->switchOn();
if ($bike->switchOn()) {
    echo 'La lumière est allumée';
} else {
    echo 'Il faut pédaler';
}

$bike=new Bicycle('yellow',1);
$BMW = new Car('red',5,fuel);
$bike->forward();
if ($bike->switchOn()) {
    echo 'La lumière est allumée';
} else {
    echo 'Il faut pédaler';
}

$BMW->switchOn();

if ($BMW->switchOn()) {
    echo 'Les phares sont allumés';
}

//    echo $message = 'your car cannot start: ' .$e->getMessage();
//    $opel->setParkBrake(false);
//}finally{
//    echo 'Ma voiture roule comme un donut';
//}
//echo $opel->start();
//echo $opel->forward();
//exit();