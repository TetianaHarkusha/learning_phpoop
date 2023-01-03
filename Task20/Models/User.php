<?php

declare(strict_types=1);

namespace Task20;

use Exception;

//the class for working with users
class User
{
    private string $name;
    private int $age;

    /**
     * The construct method for the class,
     *
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * The magic method get for the class
     *
     * @return
     */
    public function __get($property)
    {
        if (in_array($property, ['name', 'age'])) {
            return $this->$property;
        } else {
            throw new Exception('This property is undefined.');
        }
    }
}
