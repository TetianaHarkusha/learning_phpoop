<?php
spl_autoload_register(function (string $className) {
    require_once __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
});

$employee1 = new Models\Employees\Employee('John', 25, 1000);
$employee2 = new Models\Employees\Employee('Eric', 26, 2000);

echo  "Сума зарплат користувачів: " . $employee1->getSalary() + $employee2->getSalary() . "<br>";
echo  "Сума віку користувачів: " . $employee1->getAge() + $employee2->getAge();
