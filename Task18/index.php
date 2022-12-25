<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task18\Sphere;

//created objects of classes Sphere
$sphere1 = new Sphere(4);
echo "Створено об'єкт класу Sphere.\n";
echo "радіус: " . $sphere1->radius . "\n" ;
echo "об'єм: " . $sphere1->getVolume() . "\n" ;
echo "площа поверхні: " . $sphere1->getSquare();
