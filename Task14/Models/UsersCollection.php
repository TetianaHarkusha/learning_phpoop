<?php

declare(strict_types=1);

namespace Task14;

//The class for working with a collection of employees and students
class UsersCollection
{
    private $employees = []; //the array of employees
    private $students = []; //the array of students

    /**
     * Adds an employee or student to the arrays.
     *
     * @param Employee|Student $user The object of class Employee or Student
     * @return void
     */
    public function add(Employee|Student $user): void
    {
        if ($user instanceof Employee) {
            if (!in_array($user, $this->employees)) {
                $this->employees[] = $user;
            }
        }
        if ($user instanceof Student) {
            if (!in_array($user, $this->students)) {
                $this->students[] = $user;
            }
        }
    }

    /**
     * Returns the array of objects of class Student
     *
     * @return array
     */
    public function getStudents(): array
    {
        return $this->students;
    }

    /**
     * Returns the array of objects of class Employee
     *
     * @return array
     */
    public function getEmployees(): array
    {
        return $this->employees;
    }

    /**
     * Calculates the total salary of employees
     *
     * @return float
     */
    public function getTotalSalary(): float
    {
        $sum = 0;
        foreach ($this->employees as $user) {
            $sum += $user->getSalary();
        }
        return $sum;
    }

    /**
     * Calculates the total scholarship of students
     *
     * @return float
     */
    public function getTotalScholarship(): float
    {
        $sum = 0;
        foreach ($this->students as $user) {
            $sum += $user->getScholarship();
        }
        return $sum;
    }
    /**
     * Calculates the total payment for employees and students
     *
     * @return float
     */
    public function getTotalPayment(): float
    {
        return $this->getTotalScholarship() + $this->getTotalSalary();
    }
}
