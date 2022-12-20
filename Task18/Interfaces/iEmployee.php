<?php

namespace Task18;

//This interface declares the methods required for class Employee, children interface
interface iEmployee extends iUser
{
    public function getSalary(); //gets the property salary
    public function setSalary(float $salary); //sets the property salary
}
