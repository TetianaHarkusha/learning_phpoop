<?php

declare(strict_types=1);

namespace Task11;

class Driver extends Employee // the child class from Employee
{
    private int $experience;
    private string $cat;

    /**
     * The method set for the property experience
     *
     * @param  int $experience
     * @return void
     */
    public function setExperience(int $experience): void
    {
        $this->experience = $experience;
    }

    /**
     * The method set for the property cat
     *
     * @param  string $cat
     * @return void
     */
    public function setCat(string $cat): void
    {
        $this->cat = $cat;
    }

    /**
     * The method get for the property experience
     *
     * @return int
     */
    public function getExperience(): int
    {
        return $this->experience;
    }

    /**
     * The method get for the property cat
     *
     * @return string
     */
    public function getCat(): string
    {
        return $this->cat;
    }
}
