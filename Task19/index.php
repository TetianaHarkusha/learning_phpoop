<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task19\Country;
use Task19\Test;

//created objects of classes Country
$country1 = new Country('Ukraine', 31, 41000000);
echo "Створено об'єкт класу Country\n";
echo "назва: " . $country1->getName() . "\n" ;
echo "вік: " . $country1->getAge() . "\n" ;
echo "населення: " . $country1->getPopulation();

//created objects of classes Test
$test1 = new Test();
echo "\n\nСтворено об'єкт класу Test\n";
echo 'getSum: ' . $test1->getSum() . "\n";

//study functions
var_dump(trait_exists('Trait1'));
var_dump(trait_exists('Task19\Trait1'));
var_dump(trait_exists('Task19\Trait4'));
var_dump(get_declared_traits());
