<?php

declare(strict_types=1);

namespace Task18;

//The class for working of rectangles, child class
class Rectangle implements iFigure, iTetragon
{
    private float $a; // a width of a rectangle
    private float $b; // a length of a rectangle

    /**
     * The construct method for the class
     *
     * @param float $a
     * @param float $b
     */
    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     *  The method get the first side
     *
     * @return float
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     *  The method get the second side
     *
     * @return float
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     *  The method get the third side
     *
     * @return float
     */
    public function getC(): float
    {
        return $this->a;
    }

    /**
     *  The method get the fourth side
     *
     * @return float
     */
    public function getD(): float
    {
        return $this->b;
    }

    /**
     * The method calculates a square of a rectangle
     *
     * @return void
     */
    public function getSquare(): float
    {
        return $this->a * $this->b;
    }

    /**
     * The method calculates a perimeter of a rectangle
     *
     * @return void
     */
    public function getPerimeter(): float
    {
        return ($this->a + $this->b) * 2;
    }
}
