<?php

declare(strict_types=1);

namespace Task18;

//The class for working of spheres
class Sphere implements iSphere
{
    public float $radius; // a radius of a sphere

    /**
     * The construct method for the class
     *
     * @param string $radius
     */
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * The method calculates a volume of a disk
     *
     * @return float
     */
    public function getVolume(): float
    {
        return round(4 * iSphere::PI * pow($this->radius, 3) / 3, 2);
    }

    /**
     * The method calculates a surface square
     *
     * @return float
     */
    public function getSquare(): float
    {
        return round(4 * iSphere::PI * pow($this->radius, 2), 2);
    }
}
