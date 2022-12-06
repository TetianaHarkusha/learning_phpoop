<?php

declare(strict_types=1);

namespace Task17;

//The class for working of rectangles, child class
class Rectangle extends Figure
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
     *  The method get for the property width
     *
     * @return float
     */
    public function getWidth(): float
    {
        return $this->a;
    }

    /**
     *  The method get for the property length
     *
     * @return float
     */
    public function getLength(): float
    {
        return $this->b;
    }

    /**
     * The method method calculates a square of a rectangle
     *
     * @return void
     */
    public function getSquare(): float
    {
        return $this->a * $this->b;
    }

    /**
     * The method method calculates a perimeter of a rectangle
     *
     * @return void
     */
    public function getPerimeter(): float
    {
        return ($this->a + $this->b) * 2;
    }
}
