<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task18\Programmer;

//created objects of classes Programmer
$prog1 = new Programmer('John', 2500);
$prog1->addLang('PHP');
$prog1->addLang('SQL');
$prog1->addLang('Python');
echo "Створено об'єкт класу Programmer.\n";
echo "ім'я: " . $prog1->getName() . "\n" ;
echo "зарплата: " . $prog1->getSalary() . "\n" ;
echo "список мов: ";
print_r($prog1->getLangs());
