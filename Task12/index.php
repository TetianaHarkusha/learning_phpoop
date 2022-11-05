<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task12\User;
use Task12\Student;

//created objects of class User and child classes Student
$user = new User();
$user->SetName('John');
$user->setAge(22);

$student = new Student();
$student->setName('Ann'); //the overridden parent method
$student->setAge(19); //overridden parent method

echo "Створено об'єкт класу User: " . $user->getName() . ', ' . $user->getAge() . 'р.<br>';
echo "Створено об'єкт класу Student: " . $student->getName() . ', ' . $student->getAge() . 'р.<br>';
