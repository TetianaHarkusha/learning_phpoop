<?php

namespace Models\Employees;

class Employee
{
    private $name;
    private $age;
    private $salary;

    public function __construct(string $name, int $age, float $salary)
    {
       $this->name = $name;
       $this->age = $age;
       $this->salary = $salary; 
    }

    public function setName(string $name): void
    {
        $this->name = $name;

    }

    public function setAge(int $age): void
    {
        $this->age = $age;

    }

    public function setSalary(float $salary): void
    {
        $this->salary = $salary;

    }
    public function getName(): string
    {
        return $this->name;

    }

    public function getAge(): int
    {
        return $this->age;

    }

    public function getSalary(): int
    {
        return $this->salary;

    }
}