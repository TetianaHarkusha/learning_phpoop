<?php

declare(strict_types=1);

namespace Task11;

//The class for information about people, parent class
class User
{
    protected string $name; //The property is available in child classes
    protected int $age; //The property is available in child classes

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
     * The method set for the property age
     *
     * @param int $age
     * @return void
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * The method get for the property name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The method get for the property age
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
}
