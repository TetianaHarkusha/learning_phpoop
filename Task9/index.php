<?php
require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

//created objects of class Arr and added property by method add
$arr = new Task9\Arr;
$arr->add([5, 1, 4, 2]);
echo "Створено об'єкт класу Arr <br>";

//calculated the arithmetic mean of the numbers by method getAvg
echo 'Середнє арифметичне чисел - ' . $arr->getAvg() . '<br><br>';

//created objects of class City
$city = new Task9\City('Полтава', '899р', 280000);
echo "Створено об'єкт класу City: <br>";

//created the array of properties
$props = ['name', 'foundation', 'population'];

//showing objects of class City in a screen 
foreach($props as $prop)
{
    echo $prop . ' - ' . $city->$prop . '<br>';
}

//created objects of class User and the array of properties
$user = new Task9\User('Іванов', 'Іван', 'Іванович', 44);
$props = ['surname', 'name', 'patronymic', 'age'];
echo "<br>Створено об'єкт класу User: <br>";

//showing objects of class User
echo $props[1] . ' - ' . $user->{$props[1]} . '<br>';
echo $props[2] . ' - ' . $user->{$props[2]} . '<br>';

//created array of methods and showing objects of class User
$methods = ['method1' => 'getName', 'method2' => 'getAge'];
echo '<br>' . $user->{$methods['method1']}();
echo ' - ' . $user->{$methods['method2']}();
