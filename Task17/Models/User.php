<?php

declare(strict_types=1);

namespace Task17;

//The class for information about people, abstract class
abstract class User
{
    private $name;

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
    public function setName($name): void
    {
        $this->name = $name;
    }

    //The abstract method increases payouts by value
    abstract protected function increaseRevenue(float $value);

    //The abstract method decrease payouts by value
    abstract protected function decreaseRevenue(float $value);
}
