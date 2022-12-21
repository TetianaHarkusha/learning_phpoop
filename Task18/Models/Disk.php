<?php

declare(strict_types=1);

namespace Task18;

//The class for working of disks
class Disk implements iFigure, iCircle
{
    private float $a; // a radius of a disk

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
     *  The method gets the radius of a disk
     *
     * @return float
     */
    public function getRadius(): float
    {
        return $this->a;
    }

    /**
     *  The method gets the diameter of a disk
     *
     * @return float
     */
    public function getDiameter(): float
    {
        return 2 * $this->a;
    }

    /**
     * The method calculates a square of a disk
     *
     * @return float
     */
    public function getSquare(): float
    {
        return round(iFigure::PI * pow($this->a, 2), 2);
    }

    /**
     * The method calculates a perimeter of a disk
     *
     * @return float
     */
    public function getPerimeter(): float
    {
        return round(2 * iFigure::PI * $this->a, 2);
    }
}
