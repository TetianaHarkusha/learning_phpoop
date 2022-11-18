<?php

declare(strict_types=1);

namespace Task14;

//The class for working with a collection of employees
class EmployeesCollection
{
    private $employees = []; //the array of employees

    /**
     * Adds an employee to the array (collection of employees).
     *
     * @param Employee $employee The object of class Employee
     */
    public function add(Employee $employee)
    {
        if (!in_array($employee, $this->employees)) {
            $this->employees[] = $employee;
        }
    }

    /**
     * Returns the array of employees
     *
     * @return array
     */
    public function get(): array
    {
        return $this->employees;
    }
}
