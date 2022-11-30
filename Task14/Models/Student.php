<?php

declare(strict_types=1);

namespace Task14;

//The class for information about students
class Student
{
    private string $name;
    private float $scholarship;

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

     /**
     *  The method get for the property name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *  The method get for the property scholarship
     *
     * @return float
     */
    public function getScholarship(): float
    {
        return $this->scholarship;
    }
}
