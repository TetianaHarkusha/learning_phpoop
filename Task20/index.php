<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload'

use Task20\Date;

//created objects of classes Date
$date= new Date();
$date->day = 5;
$date->month = 2;
$date->year = 2023;
echo "Створено об'єкт класу Date.\n";
echo 'year: ' . $date->year . "\n";
echo 'month: ' . $date->month . "\n";
echo 'day: ' . $date->day ."\n";
echo 'weekDay: ' . $date->weekDay;
