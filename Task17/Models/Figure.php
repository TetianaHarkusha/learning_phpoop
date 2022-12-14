<?php

declare(strict_types=1);

namespace Task17;

//The class for information about geometry figures, abstract class
abstract class Figure
{
    //The abstract method calculates a square of figure
    abstract protected function getSquare();

    //The abstract method calculates a perimeter of figure
    abstract protected function getPerimeter();

    /**
     * The method calculated a sum of a square and a perimeter of a figure
     *
     * @return float
     */
    public function getSquarePerimeterSum(): float
    {
        return $this->getSquare() + $this->getPerimeter();
    }
}
