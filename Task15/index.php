<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task15\Post;
use Task15\Employee;

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
echo $employee1->getPost()->getName() . ', ' . $employee1->getPost()->getSalary() . '<br>';
