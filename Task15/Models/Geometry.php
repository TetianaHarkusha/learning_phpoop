<?php

declare(strict_types=1);

namespace Task15;

// The class for working with geometric figures
class Geometry
{
    private static $pi = 3.14; // static property

    /**
     * Calculates the area of a circle
     *
     * @param float $radius
     * @return float
     */
    public static function getCircleSquare(float $radius): float
    {
        return self::$pi * $radius * $radius;
    }

    /**
     * Calculates the circumference of a circle
     *
     * @param float $radius
     * @return float
     */
    public static function getCircleСircuit(float $radius): float
    {
        return 2 * self::$pi * $radius;
    }

    /**
     * Calculates the volume of a sphere
     *
     * @param float $radius
     * @return float
     */
    public static function getSphereVolume(float $radius): float
    {
        return 4 / 3 * self::$pi * pow($radius, 3);
    }
}
