<?php

declare(strict_types=1);

namespace Task16;

// The class for working with users
class User
{
    private string $name;
    private static int $count = 0;

    /**
     * The construct method for the class,
     * increments the static property when creating an object
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        self::$count++;
    }

    //The destruct method for the class, decrements the static property when deleting an object
    public function __destruct()
    {
        self::$count--;
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
     *  The static method get for the property count
     *
     * @return int
     */
    public static function getCount(): int
    {
        return self::$count;
    }
}
