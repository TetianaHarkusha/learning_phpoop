<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task17\Employee;
use Task17\Student;
use Task17\Rectangle;
use Task17\Quadrate;

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

//created objects of classes Rectangle
$figure1 = new Rectangle(5, 2);
echo "<br>Створено об'єкти класу Rectangle з шириною " . $figure1->getWidth() .' та довжиною ' . $figure1->getLength();
echo "<br>  площа -  " . $figure1->getSquare();
echo "<br>  периметр -  " . $figure1->getPerimeter();
echo "<br>  сума площі та периметра -  " . $figure1->getSquarePerimeterSum();

//created objects of classes Quadrate
$figure2 = new Quadrate(3);
echo "<br><br>Створено об'єкти класу Quadrate зі стороною " . $figure2->getSide();
echo "<br>  площа -  " . $figure2->getSquare();
echo "<br>  периметр -  " . $figure2->getPerimeter();
echo "<br>  сума площі та периметра -  " . $figure2->getSquarePerimeterSum();
