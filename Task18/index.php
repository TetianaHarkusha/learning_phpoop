<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task18\Employee;

//created objects of class Employee
$employee = new Employee();
$employee->setName('John');
$employee->setAge(25);
$employee->setSalary(2000);
echo "Створено об'єкт класу Employee: \n" . $employee->getName() . ', ' . $employee->getAge();
echo " (зарплата - "  . $employee->getSalary() . ') ';
