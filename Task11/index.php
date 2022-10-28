<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task11\User;
use Task11\Employee;
use Task11\Student;
use Task11\Programmer;
use Task11\Driver;

//created objects of class User and child classes Employee and Student
$user = new User();
$user->SetName('John');
$user->setAge(22);

$employee = new Employee();
$employee->setName('Eric'); //the method is inherited from the parent
$employee->setAge(43); //the method is inherited from the parent
$employee->setSalary(1500);

$student = new Student();
$student->setName('Ann'); //the method is inherited from the parent
$student->setAge(19); //the method is inherited from the parent
$student->setCourse(2);

echo "Створено об'єкт класу User: " . $user->getName() . ', ' . $user->getAge() . 'р.<br>';
echo "Створено об'єкт класу Employee: " . $employee->getName() . ', ' . $employee->getAge();
echo 'р., зарплата - ' . $employee->getSalary() . '<br>';
echo "Створено об'єкт класу Student: " . $student->getName() . ', ' . $student->getAge();
echo 'р, курс - ' . $student->getCourse() . '<br><br>';

//added a year to the student
$student->addOneYear();
echo 'Студенту додали 1 рік: ';
echo $student->getName() . ' - ' . $student->getAge()  . 'р.<br><br>';

//created objects of class Programmer adn Driver
$programmer = new Programmer();
$programmer->setName('Bob'); //the method is inherited from class User
$programmer->setAge('37'); //the method is inherited from class User
$programmer->setSalary(3000); //the method is inherited from class Employee
$programmer->setLangs(['PHP', 'C#', 'SQL']);

$driver = new Driver();
$driver->setName('Sem'); //the method is inherited from class User
$driver->setAge('51'); //the method is inherited from class User
$driver->setSalary(2000); //the method is inherited from class Employee
$driver->setExperience(32);
$driver->setCat('C, D, E');

echo "Створено об'єкт класу Programmer: " . $programmer->getName() . ', ' . $programmer->getAge() . 'р., зарплата - ';
echo $programmer->getSalary() . ', мови: ' . implode(', ', $programmer->getLangs()) . '<br>';

echo "Створено об'єкт класу Driver: " . $driver->getName() . ', ' . $driver->getAge() . 'р., зарплата - ';
echo $driver->getSalary() . ', стаж водіння - ' . $driver->getExperience() . 'р., категорія водіння - ' . $driver->getCat() .'<br>';
