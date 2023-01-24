<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload'

use Task20\User;

//created objects of classes User
$user= new User();
$user->name = 'John';
$user->age = 22;
echo "Створено об'єкт класу User.\n";
echo 'name: ' . $user->name . "\n";
echo 'age: ' . $user->age . "\n";
