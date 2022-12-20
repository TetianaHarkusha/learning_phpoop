<?php

declare(strict_types=1);

namespace Task18;

//The class for information about employee, children class
class Employee extends User implements iEmployee
{
    private float $salary;

    /**
     *  The method get for the property salary
     *
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

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
}
