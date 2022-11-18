<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task14\Employee;
use Task14\EmployeesCollection;

//created objects of class EmployeesCollection and added objects of class Employee to it
$employeesCollection = new EmployeesCollection();
$employeesCollection->add(new Employee('John', 2000));
$employeesCollection->add(new Employee('John', 2000)); //didn't add
$employee = new Employee('Robert', 3000);
$employeesCollection->add($employee);
$employeesCollection->add($employee); //didn't add
echo "Створено об'єкт класу EmployeesCollection: <br>";
print_r($employeesCollection->get());
