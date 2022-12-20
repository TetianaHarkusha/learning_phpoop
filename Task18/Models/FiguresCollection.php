<?php

declare(strict_types=1);

namespace Task18;

//The class for working with a collection of geometry figures
class FiguresCollection
{
    private $figures = []; //the array for geometry figures

    /**
     * Adds an object to the array (collection of geometry figures).
     *
     * @param Figure $obj The object of classes which implemented Figure interface
     */
    public function add(Figure $obj)
    {
        if (!in_array($obj, $this->figures)) {
            $this->figures[] = $obj;
        }
    }

    /**
     * The method calculates a total perimeter of geometry figures from the collection
     *
     * @return float
     */
    public function getTotalPerimeter(): float
    {
        $totalPerimeter = 0;
        foreach ($this->figures as $figure) {
            $totalPerimeter += $figure->getPerimeter();
        }
        return $totalPerimeter;
    }
}
