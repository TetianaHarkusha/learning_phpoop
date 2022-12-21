<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task18\Cube;
use Task18\Rectangle;
use Task18\Quadrate;
use Task18\iFigure;
use Task18\iFigure3d;
use Task18\PrintFigures;

//created objects of classes of geometric figures and added them to the array
$arr = [];
$arr[] = new Quadrate(5);
$arr[] = new Rectangle(5, 2);
$arr[] = new Cube(5);
$arr[] = new Cube(2);
$arr[] = new Cube(3);
$arr[] = new Rectangle(4, 3);
$arr[] = new Rectangle(1, 5);
$arr[] = new Quadrate(3);
print_r($arr);
PrintFigures::printSquare($arr);
PrintFigures::printAllSquare($arr);
