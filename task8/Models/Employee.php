<?php
declare(strict_types = 1);
namespace Task8;

class Employee 
{
    private $name;
    private $surname;
    private $salary;

    //construct
    public function __construct(string $name, string $surname, float $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
    }

    //get method for property name
    public function getName(): string
    {
        return $this->name;
    }

    //get method for property surname
    public function getSurname(): string
    {
        return $this->surname;
    }

    //get method for property salary
    public function getSalary(): float
    {
        return $this->salary;
    }

    //set method for property salary
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
}
