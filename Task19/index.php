<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task19\Country;

//created objects of classes Country
$country1 = new Country('Ukraine', 31, 41000000);
echo "Створено об'єкт класу Country\n";
echo "назва: " . $country1->getName() . "\n" ;
echo "вік: " . $country1->getAge() . "\n" ;
echo "населення: " . $country1->getPopulation();
