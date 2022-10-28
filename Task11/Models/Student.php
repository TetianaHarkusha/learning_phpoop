<?php

declare(strict_types=1);

namespace Task11;

class Student extends User  // the child class from User
{
    private int $course;

    /**
     * The method set for the property course
     *
     * @param int $course
     * @return void
     */
    public function setCourse(int $course): void
    {
        $this->course = $course;
    }

    /**
     * The method get for the property course
     *
     * @return int
     */
    public function getCourse(): int
    {
        return $this->course;
    }

    public function addOneYear(): void
    {
        ++$this->age;
    }
}
