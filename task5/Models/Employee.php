<?php

namespace Task5;

class Employee extends User
{
    
    private float $salary;

    public function __construct(string $name, int $age, float $salary)
    {
        parent::__construct($name, $age);
        $this->salary = $salary;        
    }
    
    public function getSalary(): float
    {
        return $this->salary;
    }

    public function checkAge(): bool
    {
        return ($this->age > User::MIN_AGE)? true: false;
    }

    public function doubleSalary()
    {
        $this->salary = 2 * $this->salary;
    }

}
