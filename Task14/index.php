<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task14\Employee;
use Task14\UsersCollection;
use Task14\Student;

//created objects of class UsersCollection and added objects of class Employee and Student to it
$usersCollection = new UsersCollection();
$usersCollection->add(new Employee('Bob', 2500));
$usersCollection->add(new Student('Sarah', 300));
$usersCollection->add(new Student('Jack', 350));
$usersCollection->add(new Student('Maria', 400));
$usersCollection->add(new Employee('Anna', 3000));
$usersCollection->add(new Employee('Edward', 2000));
echo "Створено об'єкт класу UsersCollection: <br><br> Студенти:";
print_r($usersCollection->getStudents());
echo '<br><br> Робітники:';
print_r($usersCollection->getEmployees());

//used method class UsersCollection
echo '<br><br>Отримаємо повну суму стипендій: ' . $usersCollection->getTotalScholarship() . '<br>';
echo 'Отримаємо повну суму зарплат: ' . $usersCollection->getTotalSalary() . '<br>';
echo 'Отримаємо повну суму платежів: ' . $usersCollection->getTotalPayment() . '<br>';
