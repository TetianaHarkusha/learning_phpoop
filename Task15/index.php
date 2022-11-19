<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task15\Post;
use Task15\Employee;
use Task15\Num;
use Task15\Geometry;
use Task15\ArraySumHelper;

//created objects of class Post
$post1 = new Post('programmer', 2500);
$post2 = new Post('driver', 2000);
$post3 = new Post('manager', 1500);

//created objects of class Employee
$employee1 = new Employee('John', 'Smit', $post1);
echo 'Employees: <br>';
echo $employee1->getName() . ' ' . $employee1->getSurname() . ' - ';
echo $employee1->getPost()->getName() . ', ' . $employee1->getPost()->getSalary() . '<br>';

//changed property post of objects of class Employee
$employee1->changePost($post3);
echo '<br>Employees after changes: <br>';
echo $employee1->getName() . ' ' . $employee1->getSurname() . ' - ';
echo $employee1->getPost()->getName() . ', ' . $employee1->getPost()->getSalary() . '<br><br>';

//printed static properties or methods of class Num
echo 'The sum of static property values of class Num: ' . Num::getSum() . '<br><br>';

//printed static properties or methods of class Geometry
$radius = 10;
echo 'The the area of a circle with radius ' . $radius . ' : ' . Geometry::getCircleSquare($radius) .'<br>';
echo 'The the circumference of a circle with radius ' . $radius . ' : ' . Geometry::getCircleСircuit($radius) .'<br>';
echo 'The the volume of a sphere with radius ' . $radius . ' : ' . Geometry::getSphereVolume($radius) .'<br>';

//printed static methods of class ArraySumHelper
//The class as a set of methods
$arraySumHelper = new ArraySumHelper();
$arr = [1, 2, 3, 4];
echo '<br>The sum of the second powers of the elements of the array: ' . ArraySumHelper::getSum2($arr);
