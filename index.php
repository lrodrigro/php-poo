<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('Rouge');

echo 'Le vélo est ' . $bike->getColor() . '<br>';

echo '<br>' . $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br>';

//var_dump($bike);
//$bike->dump();

$car = new Car('Noir', 5, 'Essence');

echo '<br>' . 'La voiture est ' . $car->getColor() . '<br>';

echo '<br>' . $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake() . '<br>';

