<?php
declare(strict_types = 1);

namespace Task9;

class User
{
    private string $name;
    private string $surname;
    private string $patronymic;
    private int $age;

    //the constructor method for the class
    public function __construct(string $surname, string $name, string $patronymic, int $age)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
        $this->age = $age;
    }

    //the magic method get for any property
    public function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }
    }

    //the method get for the property name
    public function getName(): string
    {
        return $this->name;
    }
    
    //the method get for the property Age
    public function getAge(): int
    {
        return $this->age;
    }
}