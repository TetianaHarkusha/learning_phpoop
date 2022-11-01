<?php

declare(strict_types=1);

namespace Task11;

//The class for working with employees, the child class from User
class Employee extends User
{
    private float $salary;

    /**
     * The method set for the property salary
     *
     * @param float $salary
     * @return void
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * The method get for the property salary
     *
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }
}
