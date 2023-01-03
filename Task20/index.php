<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload'

use Task20\User;
use Task20\Arr;

//created objects of classes User
$user1 = new User('Іван', 'Іваненко', 'Петрович');
echo "Створено об'єкт класу User.\n";
echo $user1;

//created objects of classes Arr
$arr = new Arr();
$arr->add(5)->add(4)->add(1)->add(5);
echo "\n\nСтворено об'єкт класу Arr.\n";
echo $arr;
