<?php
require_once __DIR__ . '/../vendor/autoload.php';

echo "Об'єкти класу Employee <br>";
$employees = [
    new  Task8\Employee('John', 'Brown', 1000),
    new  Task8\Employee('Eric', 'Smit', 2000),
    new  Task8\Employee('Ben', 'Grey', 1500)
];
$employees[0]->setSalary(1250);
foreach($employees as $employee) 
{
    echo $employee->getName() . ' ' . $employee->getSurname() . ' - ' . $employee->getSalary() . '<br>';
}