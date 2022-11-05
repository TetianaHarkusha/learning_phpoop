<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task12\User;
use Task12\Employee;
use Task12\Product;

//created objects of class User
$user = new User('2001-12-10');
echo "Створено об'єкт класу User: <br>" . $user->getName() . ' ' . $user->getSurname();
echo ' (д.н. ' . $user->getBirthday() . ') - ' . $user->getAge() . ' рік/років(и). <br><br>';

//created objects of class Employee
$employee = new Employee('Ilon', 'Musk', '1971-06-28', 1000000);
echo "Створено об'єкт класу Employee: <br>";
echo $employee->getName() . ' ' . $employee->getSurname() . ' (д.н. ' . $employee->getBirthday() . ') - ';
echo $employee->getAge() . ' рік/років(и), зарплата - ' . $employee->getSalary() . '.<br><br>';

//created objects of class Product
echo "Створено об'єкт класу Product та змінні: <br>";
$prod = new Product();
$prod->name = 'bread';
$prod->price = 19.5;
$product1 = $prod;
$product2 = $product1;
echo 'Змінна product1:';
var_dump($product1);
echo '<br>Змінна product2:';
var_dump($product2);
