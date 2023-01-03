<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload'

use Task20\User;

//created objects of classes User
$user1 = new User('Іван', 'Іваненко', 'Петрович');
echo "Створено об'єкт класу User.\n";
echo $user1;
