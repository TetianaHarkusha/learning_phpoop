<?php

declare(strict_types=1);

namespace Task11;

//The class for working with programmers, the child class from Employee
class Programmer extends Employee
{
    private array $langs;

    /**
     * The method set for the property langs
     *
     * @param array $langs
     * @return void
     */
    public function setLangs(array $langs): void
    {
        $this->langs = $langs;
    }

    /**
     * The method get for the property langs
     *
     * @return array
     */
    public function getLangs(): array
    {
        return $this->langs;
    }
}
