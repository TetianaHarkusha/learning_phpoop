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

echo "<br> Об'єкти класу Student <br>";
$students = [
    new Task8\Student('Sarah'),
    new Task8\Student('Ann'), 
    new Task8\Student('Boris'),
    new Task8\Student('Met'),
    new Task8\Student('Honey')
];
for ($i = 1; $i <= 4; $i++) {
    $students[2]->transferToNextCourse();
}
$students[4]->transferToNextCourse();
foreach ($students as $student)
{
    echo $student->name . ' - ' . $student->course . ' курс<br>'; 
} 
echo"<br>Студенти переведені до наступного курсу: <br>";
foreach ($students as $student)
{
    $student->transferToNextCourse();
    echo $student->name . ' - ' . ($student->course ?? " закінчив навчання") . '<br>'; 
} 