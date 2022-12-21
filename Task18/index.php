<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task18\Rectangle;

//created objects of classes Rectangle which implements two interfaces
$rectangle = new Rectangle(4, 3);
echo "Створено прямокутник зі сторонами: " . $rectangle->getA() . ', ' ;
echo $rectangle->getB() . ', ' . $rectangle->getC() . ', ' . $rectangle->getD() . "\n";
echo "площа: " . $rectangle->getSquare() . "\n" ;
echo "периметер: " . $rectangle->getPerimeter() . "\n" ;
