<?php

declare(strict_types=1);

namespace Task18;

//The class for working of quadrates
class Quadrate implements Figure
{
    private float $a; // a side of a quadrate

    /**
     * The construct method for the class
     *
     * @param float $a
     */
    public function __construct(float $a)
    {
        $this->a = $a;
    }

    /**
     *  The method get for the property side of a quadrate
     *
     * @return float
     */
    public function getSide(): float
    {
        return $this->a;
    }


    /**
     * The method calculates a square of a quadrate
     *
     * @return void
     */
    public function getSquare(): float
    {
        return pow($this->a, 2);
    }

    /**
     * The method calculates a perimeter of perimeter
     *
     * @return void
     */
    public function getPerimeter(): float
    {
        return $this->a * 4;
    }
}
