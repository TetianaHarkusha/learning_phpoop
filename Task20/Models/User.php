<?php

declare(strict_types=1);

namespace Task20;

use Exception;

//the class for working with users
class User
{
    private string $name;
    private int $age;

    public const MIN_AGE = 0;
    public const MAX_AGE = 70;

    // The magic method set for the class
    public function __set($property, $value)
    {
        switch ($property) {
            case 'name':
                if (!empty($value)) {
                    $this->$property = $value;
                } else {
                    throw new Exception('The name must have meaning');
                }
                break;
            case 'age':
                if ($value >= self::MIN_AGE and $value <= self::MAX_AGE) {
                    $this->$property = $value;
                } else {
                    throw new Exception('The invalid value for age');
                }
                break;
            default:
                throw new Exception('The property does not exist');
        }
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
