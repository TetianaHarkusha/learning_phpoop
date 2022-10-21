<?php
declare(strict_types = 1);

namespace Task9;

use Exception;

class City
{
    private string $name;
    private string $foundation;
    private int $population;

    public function __construct(string $name, string $foundation, int $population)
    {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }

    //magic method get for any property
    public function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }
    }
}