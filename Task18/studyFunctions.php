<?php

namespace Task18;
use Task18\Sphere;

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

var_dump(interface_exists('Task18\iTest1'));
var_dump(interface_exists(__NAMESPACE__ . '\iTest1'));
var_dump(interface_exists('iTest1'));
var_dump(interface_exists('iTest2'));
var_dump(interface_exists('Task18\iTest2'));

//created objects of classes Sphere
$sphere1 = new Sphere(4);

echo'All declared interfaces:';
var_dump(get_declared_interfaces());