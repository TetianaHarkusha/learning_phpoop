<?php

declare(strict_types=1);

namespace Task12;

use Exception;

//The class for information about people, child class
class Student extends User
{
    const MAX_AGE = 25; //max value for property age
    const MAX_NAME = 10; //max length for property name

    /**
     * The method set for the property name
     *
     * @param string $name
     * @return void
     */
    public function setName($name): void
    {
        if (strlen($name) > self::MAX_NAME) {
            throw new Exception('The length of the name value is too long');
        }
        parent::setName($name);
    }

    /**
     * The method set for the property age
     *
     * @param int $age
     * @return void
     */
    public function setAge($age): void
    {
        if ($age > self::MAX_AGE) {
            throw new Exception('The value of age is too big');
        }
        parent::setAge($age);
    }
}