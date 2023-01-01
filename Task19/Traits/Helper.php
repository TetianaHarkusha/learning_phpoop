<?php

namespace Task19;

//The trait with properties name and age and their getters
trait Helper
{
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
     * @return string
     */
    public function getAge(): int
    {
        return $this->age;
    }
}
