<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task18\Disk;

//created objects of classes Disk which implements two interfaces
$rectangle = new Disk(5);
echo "Створено коло.\n";
echo "радіус: " . $rectangle->getRadius() . "\n" ;
echo "діаметр: " . $rectangle->getDiameter() . "\n" ;
echo "площа: " . $rectangle->getSquare() . "\n" ;
echo "периметер: " . $rectangle->getPerimeter() . "\n" ;
