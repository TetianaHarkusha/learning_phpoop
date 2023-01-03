<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload'

use Task20\User;
use Task20\Arr;

//created objects of classes User
$user1 = new User('Іван', 25);
echo "Створено об'єкт класу User.\n";
echo 'name: ' . $user1->name;
echo "\nage: " . $user1->age;
