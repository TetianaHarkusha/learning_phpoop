<?php

declare(strict_types=1);

namespace Task18;

//The class for working of cubes
class Cube implements iCube
{
    private float $a; // a side of a cube

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
     * The method calculates the cube volume
     *
     * @return float
     */
    public function getVolume(): float
    {
        return pow($this->a, 3);
    }

    /**
     * The method calculates the surface square of a cube
     *
     * @return float
     */
    public function getSquareSurface(): float
    {
        return 6 * pow($this->a, 2);
    }
}
