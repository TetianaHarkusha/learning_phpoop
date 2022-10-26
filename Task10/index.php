<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task10\Arr;
use Task10\ArraySumHelper;

//created objects of class Arr and calculated the sum of the numbers
echo "Створено об'єкт класу Arr";
echo '<br>Сума чисел - ' . (new Arr(['one','1', 2, 5]))->getSum() .'<br>';

//methods use in a chain
echo '<br>Сума чисел - ' . (new Arr(['one',1, 5, 5]))->add(2, 'two')->push([9, 8, 1])->add(1)->getSum();

//The class as a set of methods
$arraySumHelper = new ArraySumHelper();
$arr = [1, 2, 3];
echo '<br><br>Сума перших ступенів елементів масиву: ' . $arraySumHelper->getAvg1($arr);
echo '<br>Корінь квадратний із суми квадратів елементів масиву: ' . $arraySumHelper->getAvg2($arr);
echo '<br>Корінь кубічний із суми кубів елементів масиву: ' . $arraySumHelper->getAvg3($arr);
echo '<br>Корінь четвертого ступеню із суми четвертих ступенів елементів масиву: ' . $arraySumHelper->getAvg4($arr);
