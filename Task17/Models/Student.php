<?php

declare(strict_types=1);

namespace Task17;

//The class for information about students, child class
class Student extends User
{
    private float $scholarship;

    /**
     *  The method get for the property scholarship
     *
     * @return float
     */
    public function getScholarship(): float
    {
        return $this->scholarship;
    }

    /**
     * The method set for the property scholarship
     *
     * @param float $scholarship
     * @return void
     */
    public function setScholarship($scholarship): void
    {
        $this->scholarship = $scholarship;
    }

    /**
     * The method increases scholarship by value
     *
     * @param float $value
     * @return void
     */
    public function increaseRevenue($value): void
    {
        $this->scholarship += $value;
    }

    /**
     * The method decreases scholarship by value
     *
     * @param float $value
     * @return void
     */
    public function decreaseRevenue($value): void
    {
        $this->scholarship -= $value;
    }
}
