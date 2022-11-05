<?php

declare(strict_types=1);

namespace Task12;

use Exception;

//The class for information about people, parent class
class User
{
    const MIN_AGE = 18; //min value for property age
    const MIN_NAME = 3; //min length for property name

    private string $name;
    private int $age;

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
     *  The method get for the property age
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * The method set for the property name
     *
     * @param string $name
     * @return void
     */
    public function setName($name): void
    {
        if (strlen($name) < self::MIN_NAME) {
            throw new Exception('The length of the name value is too shot');
        }
        $this->name = $name;
    }

    /**
     * The method set for the property age
     *
     * @param int $age
     * @return void
     */
    public function setAge($age): void
    {
        if ($age < self::MIN_AGE) {
            throw new Exception('The value of age is too small');
        }
        $this->age = $age;
    }

}