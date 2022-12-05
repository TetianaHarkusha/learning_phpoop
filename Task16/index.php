<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task16\User;
use Task16\Circle;

//created and deleted objects of class User and printed count of objects
$user1 = new User('John');
echo 'Count of object: ' . User::getCount() . "\n";
$user2 = new User('Bob');
echo 'Count of object: ' . $user2::getCount() . "\n";
unset($user1);
echo 'Count of object: ' . User::getCount() . "\n\n";

//created an object of class Circle
$circle1 = new Circle(10);
echo 'The area of a circle with a radius ' . $circle1->getRadius() . ' : '. $circle1->getSquare() . "\n";
echo 'The circumference of a circle with a radius ' . $circle1->getRadius() . ' : '. $circle1->getСircuit() . "\n";
