<?php

namespace Task18;

//This interface declares the methods required for classes of cubes
interface iCube
{
    public function __construct(float $a);
    public function getVolume(); //calculates the cube volume
    public function getSquareSurface(); //calculates the surface square of a cube
}
