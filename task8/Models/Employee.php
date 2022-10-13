<?php
declare(strict_types = 1);
namespace Task8;

class Employee 
{
    private $name;
    private $surname;
    private $salary;

    public function __construct(string $name, string $surname, float $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
}