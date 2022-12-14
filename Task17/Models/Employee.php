<?php

declare(strict_types=1);

namespace Task17;

//The class for information about employees, child class
class Employee extends User
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
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    /**
     * The method increases salary by value
     *
     * @param float $value
     * @return void
     */
    public function increaseRevenue(float $value): void
    {
        $this->salary += $value;
    }

    /**
     * The method decreases salary by value
     *
     * @param float $value
     * @return void
     */
    public function decreaseRevenue(float $value): void
    {
        $this->salary -= $value;
    }
}
