<?php
require_once __DIR__ . '/vendor/autoload.php';

$user1 = new Task5\User('John', 25);
echo "Об'єкт класу User <br>";
echo "name - " . $user1->getName() . ", age - " . $user1->getAge() . "<br>";
$user1->setAge(30);
echo "Уточнений вік користувача " . $user1->getName() . " - " . $user1->getAge() . " років. <br><br>";
