<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task18\Disk;
use Task18\Quadrate;
use Task18\FiguresCollection;
use Task18\User;

//created objects of class FiguresCollection and added geometry figures
$collection = new FiguresCollection();
$collection->add(new Disk(5));
$collection->add(new Disk(3));
$collection->add(new Quadrate(3));
echo "Створено об'єкт - колекція геометричних фігур \n ";
print_r($collection);
echo "Сумарний периметр всіх фігур: " . $collection->getTotalPerimeter();

//created objects of class User
$user1 = new User();
$user1->setName('John');
$user1->setAge(22);
echo "\n \nСтворено об'єкт класу User: " . $user1->getName() . ', ' . $user1->getAge();
