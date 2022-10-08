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