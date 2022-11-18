<?php

declare(strict_types=1);

namespace Task14;

//The class for working with a collection of employees and students
class UsersCollection
{
    private $arr = []; //the array of employees or students

    /**
     * Adds an employee or student to the array (collection of employees or students).
     *
     * @param Employee|Student $user The object of class Employee or Student
     */
    public function add(Employee|Student $user)
    {
        if (!in_array($user, $this->arr)) {
            $this->arr[] = $user;
        }
    }

    /**
     * Returns the array of employees or students
     *
     * @return array
     */
    public function get(): array
    {
        return $this->arr;
    }

    /**
     * Prints the names of employees
     *
     * @return void
     */
    public function printEmployeesName(): void
    {
        foreach ($this->arr as $user) {
            if ($user instanceof Employee) {
                echo $user->name . ' <br>';
            }
        }
    }

    /**
     * Prints the names of students
     *
     * @return void
     */
    public function printStudentsName(): void
    {
        foreach ($this->arr as $user) {
            if ($user instanceof Student) {
                echo $user->name . ' <br>';
            }
        }
    }

    /**
     * Calculates the total salary of employees add the total scholarship of students
     *
     * @return array
     */
    public function calculateTotalSalaryAndScholarship(): array
    {
        $total['salary'] = 0;
        $total['scholarship'] = 0;
        foreach ($this->arr as $user) {
            if ($user instanceof Employee) {
                $total['salary'] += $user->salary;
            }
            if ($user instanceof Student) {
                $total['scholarship'] += $user->scholarship;
            }
        }
        return $total;
    }
}
