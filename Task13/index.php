<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task13\Arr;

//created objects of class Arr and calculated the sum of the second and third powers of array numbers
$arr = new Arr();
$arr->add(1, 2, 3);
echo "Створено об'єкт класу Arr";
echo '<br>Сума квадратів і кубів елементів масиву: ' . $arr->getSum23();
