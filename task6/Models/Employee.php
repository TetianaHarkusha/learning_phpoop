<?php
declare(strict_types = 1);
namespace Task6;


class Employee
{
    public $name;
    public $age;
    public $salary;

    public function __construct(string $name, int $age, float $salary)
    {
       $this->name = $name;
       $this->age = $age;
       $this->salary = $salary; 
    }
}