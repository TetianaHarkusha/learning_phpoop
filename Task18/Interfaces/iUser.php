<?php

namespace Task18;

//This interface declares the methods required for class User
interface iUser
{
    public function __construct(string $name, int $age); //construct method for the class
    public function getName(); //gets the property name
    public function getAge(); //gets the property age
}
