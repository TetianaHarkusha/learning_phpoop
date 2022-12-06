<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task17\Employee;
use Task17\Student;

//created objects of classes Employee and Student
$user1 = new Employee();
$user1->setName('John');
$user1->setSalary(2000);

$user2 = new Student();
$user2->setName('Bob');
$user2->setScholarship(150);

echo "Створено об'єкти класу Employee and Student:<br>";
echo $user1->getName() . ' - ' . $user1->getSalary() . "<br>";
echo $user2->getName() . ' - ' . $user2->getScholarship() .  "<br>";

//objects after increases/decrease payouts
$user1->decreaseRevenue(500);
$user2->increaseRevenue(50);
echo "<br>после увеличения/уменьшения виплат:<br>";
echo $user1->getName() . ' - ' . $user1->getSalary() . "<br>";
echo $user2->getName() . ' - ' . $user2->getScholarship() .  "<br>";
