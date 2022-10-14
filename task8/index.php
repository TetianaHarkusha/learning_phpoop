<?php
require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

echo "Об'єкти класу Employee <br>";
//created an array of objects of class Employee
$employees = [
    new  Task8\Employee('John', 'Brown', 1000),
    new  Task8\Employee('Eric', 'Smit', 2000),
    new  Task8\Employee('Ben', 'Grey', 1500)
];

//checking magic method set
$employees[0]->setSalary(1250);

//showing objects Employee in a screen 
foreach($employees as $employee) 
{
    echo $employee->getName() . ' ' . $employee->getSurname() . ' - ' . $employee->getSalary() . '<br>';
}

//created an array of objects of class Student with default value course
echo "<br> Об'єкти класу Student <br>";
$students = [
    new Task8\Student('Sarah'),
    new Task8\Student('Ann'), 
    new Task8\Student('Boris'),
    new Task8\Student('Met'),
    new Task8\Student('Honey')
];

//transfering student 'Boris' for 5th course
for ($i = 1; $i <= 4; $i++) {
    $students[2]->transferToNextCourse();
}

$students[4]->transferToNextCourse(); //transfering student 'Honey' for 2nd course 

//showing objects Student in a screen 
foreach ($students as $student)
{
    echo $student->name . ' - ' . $student->course . ' курс<br>'; 
} 

//transfering all students to next course and showing in a screen
echo"<br>Студенти переведені до наступного курсу: <br>";
foreach ($students as $student)
{
    $student->transferToNextCourse();
    echo $student->name . ' - ' . ($student->course ?? " закінчив навчання") . '<br>'; 
} 
