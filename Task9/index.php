<?php
require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

//created objects of class Arr and added property by method add
$arr = new Task9\Arr;
$arr->add([5, 1, 4, 2]);
echo "Створено об'єкт класу Arr <br>";

//calculated the arithmetic mean of the numbers by method getAvg
echo 'Середнє арифметичне чисел - ' . $arr->getAvg() . '<br><br>';
