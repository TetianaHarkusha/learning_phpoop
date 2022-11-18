<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task14\Employee;
use Task14\EmployeesCollection;
use Task14\Student;
use Task14\UsersCollection;

//created objects of class EmployeesCollection and added objects of class Employee to it
$employeesCollection = new EmployeesCollection();
$employeesCollection->add(new Employee('John', 2000));
$employeesCollection->add(new Employee('John', 2000)); //didn't add
$employee = new Employee('Robert', 3000);
$employeesCollection->add($employee);
$employeesCollection->add($employee); //didn't add
echo "Створено об'єкт класу EmployeesCollection: <br>";
print_r($employeesCollection->get());

//created objects of class UsersCollection and added objects of class Employee and Student to it
$usersCollection = new UsersCollection();
$usersCollection->add(new Employee('Bob', 2500));
$usersCollection->add(new Student('Sarah', 400));
$usersCollection->add(new Student('Jack', 450));
$usersCollection->add(new Student('Maria', 450));
$usersCollection->add(new Employee('Anna', 3000));
$usersCollection->add(new Employee('Edward', 2000));
echo "<br><br>Створено об'єкт класу UsersCollection: <br><br>";
print_r($usersCollection->get());

//used method class UsersCollection
//printed names of employees
echo '<br>Імена усіх працівників: <br>';
$usersCollection->printEmployeesName();
//printed names of students
echo '<br>Імена усіх студентів: <br>';
$usersCollection->printStudentsName();
//printed the total salary for employees
echo '<br>Загальна зарплата: ' . $usersCollection->calculateTotalSalaryAndScholarship()['salary'];
echo '<br>Загальна стипендія: ' . $usersCollection->calculateTotalSalaryAndScholarship()['scholarship'];
