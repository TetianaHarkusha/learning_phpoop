<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task16\User;

//created and deleted objects of class User and printed count of objects
$user1 = new User('John');
echo 'Count of object: ' . User::$count . "\n";
$user2 = new User('Bob');
echo 'Count of object: ' . $user2::$count . "\n";
unset($user1);
echo 'Count of object: ' . User::$count . "\n";
