<?php

namespace Task18;

//This interface declares the methods required for classes of geometric shapes
interface Figure
{
    public const PI = 3.14;
    public function getSquare(); //calculates the square of a geometric figure
    public function getPerimeter(); //calculates the perimeter of a geometric figure
}
