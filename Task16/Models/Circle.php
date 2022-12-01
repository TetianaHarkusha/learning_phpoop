<?php

declare(strict_types=1);

namespace Task16;

// The class for working with circles
class Circle
{
    public const PI = 3.14; // static property
    public float $radius;

    /**
     * The construct method for the class
     *
     * @param float
     */
    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    /**
     *  The method get for the property radius
     *
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * Calculates the area of a circle
     *
     * @return float
     */
    public function getSquare(): float
    {
        return self::PI * $this->radius * $this->radius;
    }

    /**
     * Calculates the circumference of a circle
     *
     * @return float
     */
    public function getСircuit(): float
    {
        return 2 * self::PI * $this->radius;
    }
}
