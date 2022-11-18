<?php

declare(strict_types=1);

namespace Task14;

//The class for information about employees
class Employee
{
    private string $name;
    private float $salary;

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

    /**
     *  The method get for the property name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *  The method get for the property salary
     *
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }
}
