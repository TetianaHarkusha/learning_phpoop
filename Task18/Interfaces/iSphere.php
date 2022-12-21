<?php

namespace Task18;

//This interface declares the methods required for class Sphere
interface iSphere
{
    public const PI = 3.14;
    public function __construct(float $radius);
    public function getVolume();
    public function getSquare();
}
