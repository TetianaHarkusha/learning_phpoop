<?php
require_once __DIR__ . '/vendor/autoload.php';

$user1 = new Task5\User('John', 25);
echo "Об'єкт класу User <br>";
echo "name - " . $user1->getName() . ", age - " . $user1->getAge() . "<br>";
$user1->setAge(30);
echo "Уточнений вік користувача " . $user1->getName() . " - " . $user1->getAge() . " років. <br><br>";

$employee1 = new Task5\Employee('John', 25, 1000);
$employee2 = new Task5\Employee('Eric', 26, 2000);
echo "Об'єкти класу Employee <br>";
echo "name - " . $employee1->getName() . ", age - " . $employee1->getAge() .", salary - " . $employee1->getSalary() . "<br>";
echo "name - " . $employee2->getName() . ", age - " . $employee2->getAge() .", salary - " . $employee2->getSalary() . "<br>";
echo  "Сума зарплат робітників: " . $employee1->getSalary() + $employee2->getSalary() . "<br>";
echo  "Сума віку робітників: " . $employee1->getAge() + $employee2->getAge(). "<br>";

$employee1->doubleSalary();
echo "Нова (подвоєна) зарплата працівника " . $employee1->getName() . " складає " . $employee1->getSalary() . "<br>";
if($employee1->checkAge()) {
    echo "Вік робітника " . $employee1->getName() . " більше 18 років.<br><br>";
} else { 
    echo "Вік робітника не більше 18 років.<br><br>";
}
