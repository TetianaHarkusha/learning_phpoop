<?php

declare(strict_types=1);

namespace Task14;

//The class for information about employees
class Employee
{
    public string $name;
    public float $salary;

    /**
     * The constructor method for the class
     *
     * @param string $name
     * @param float $salary
     */
    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
}
