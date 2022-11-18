<?php

declare(strict_types=1);

namespace Task14;

//The class for information about students
class Student
{
    public string $name;
    public float $scholarship;

    /**
     * The constructor method for the class
     *
     * @param string $name
     * @param float $scholarship
     */
    public function __construct(string $name, float $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }
}
