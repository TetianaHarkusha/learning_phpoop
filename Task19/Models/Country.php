<?php

declare(strict_types=1);

namespace Task19;

//The class is for information about countries, uses trait
class Country
{
    use Helper; //connects trait

    private int $population;

    /**
     * The construct method for the class
     *
     * @param string $radius
     */
    public function __construct(string $name, int $age, int $population)
    {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }

    /**
     *  The method get for the property population
     *
     * @return string
     */
    public function getPopulation(): int
    {
        return $this->population;
    }
}
