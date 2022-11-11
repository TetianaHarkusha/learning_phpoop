<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task13\Arr;
use Task13\Cart;
use Task13\Product;

//created objects of class Arr and calculated the sum of the second and third powers of array numbers
$arr = new Arr();
$arr->add(1, 2, 3);
echo "Створено об'єкт класу Arr";
echo '<br>Сума квадратів і кубів елементів масиву: ' . $arr->getSum23();
echo '<br>Сума середнього арифметичного та середнього квадратичного елементів масиву: ' . $arr->getAvgMeanSum() . '<br><br>';

//created objects of class Cart (collection of object of Product class)
$cart = new Cart();

//added the set of products
$cart->add(new Product('Bread', 19.9, 3));
$cart->add(new Product('Butter', 50, 1));
$cart->add(new Product('Milk', 25.5, 2));
$cart->add(new Product('Bread', 30.4, 1));

//removed the product
$cart->remove('Bread');

//printed products
echo "Створено об'єкт класу Cart<br>";
foreach ($cart->products as $product) {
    echo $product->getName() . '(ціна ' . $product->getPrice() . ') - ' . $product->getQuantity() . ' шт. <br>';
}

//calculated
echo '------------------<br>';
echo 'вартість: ' . $cart->getTotalCost() . '<br>';
echo 'кількість: ' . $cart->getTotalQuantity() . '<br>';
echo 'середня варість: ' . $cart->getAvgPrice();
