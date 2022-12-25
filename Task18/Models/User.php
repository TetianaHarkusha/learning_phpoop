<?php

declare(strict_types=1);

namespace Task18;

//The class for information about people
class User implements iUser
{
    public string $name;
    public int $age;

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
     * The method set for the property name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
     * The method set for the property age
     *
     * @param int $age
     * @return void
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }
}
