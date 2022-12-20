<?php

declare(strict_types=1);

namespace Task18;

//The class for information about people
class User implements iUser
{
    public string $name;
    public int $age;

    /**
     * The construct method for the class
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
}
