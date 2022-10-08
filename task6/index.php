<?php
require_once __DIR__ . '/../vendor/autoload.php';

$student1 = new Task6\Student('John', 3);
$student2 = new Task6\Student('Erik', 5);
echo "Об'єкт класу Student: <br>";
echo $student1->name . " - " . $student1->course . " курс<br>";
echo $student2->name . " - " . $student2->course . " курс<br><br>";

$student1->transferToNextCourse();
$student2->transferToNextCourse();
echo "Студенти переведені до наступного курсу: <br>";
echo "$student1->name - " . ($student1->course ?? " закінчив навчання") . "<br>";
echo "$student2->name - " . ($student2->course ?? " закінчив навчання") . "<br><br>";

$employee1 = new Task6\Employee('Eric', 25, 1000);
$employee2 = new Task6\Employee('Kyle', 30, 2000);
$employee1->name = 'John';
$employee1->age = 26;
$employee1->salary = 1500;
$employee1->setAge(100);
echo "Об'єкти класу Employee <br>";
echo "name - " . $employee1->name . ", age - " . $employee1->age .", salary - " . $employee1->getSalary() . "<br>";
echo "name - " . $employee2->name . ", age - " . $employee2->age .", salary - " . $employee2->getSalary() . "<br>";
echo  "Сума зарплат робітників: " . $employee1->salary + $employee2->salary;