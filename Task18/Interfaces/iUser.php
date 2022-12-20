<?php

namespace Task18;

//This interface declares the methods required for class User
interface iUser
{
    public function setName(string $name); //sets the property name
    public function getName(); //gets the property name
    public function setAge(int $age); //sets the property age
    public function getAge(); //gets the property age
}
