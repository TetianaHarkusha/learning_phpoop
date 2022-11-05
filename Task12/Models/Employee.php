<?php

declare(strict_types=1);

namespace Task12;

//The class for information about employees, child class
class Employee extends User
{
    private float $salary;

    /**
     * The constructor method for the class
     * uses the parent constructor and overwrites it
     *
     * @param string $birthday
     */
    public function __construct(string $name, string $surname, string $birthday, float $salary)
    {
        parent::__construct($birthday); //uses parent constructor
        $this->name = $name; //overwrite the property
        $this->surname = $surname; //overwrite the property
        $this->salary = $salary;
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
