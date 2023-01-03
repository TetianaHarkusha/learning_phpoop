<?php

declare(strict_types=1);

namespace Task20;

//the class for working with users
class User
{
    private string $name;
    private string $surname;
    private string $patronymic;

    /**
     * The construct method for the class,
     *
     * @param string $name
     * @param string $surname
     * @param string $patronymic
     */
    public function __construct(string $name, string $surname, string $patronymic)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
    }
    
    /**
     * The magic method for the class,
     * to decide how it will react when it is treated like a string
     *
     * @return string
     */
    public function __toString(): string
    {
        return ucwords($this->surname . ' ' . mb_substr($this->name, 0, 1) . '.' . mb_substr($this->patronymic, 0, 1) . '.');
    }
}
