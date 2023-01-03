<?php

declare(strict_types=1);

namespace Task20;

//Class for working with arrays of numbers
class Arr
{
    private array $numbers = []; //array for numbers

    /**
     * Adds only number to the end of property.
     *
     * @param float $num
     * @return $this
     */
    public function add(float $num)
    {
        if (is_numeric($num)) {
            $this->numbers[] = $num;
        }
        return $this;
    }

    /**
     * The magic method for the class,
     * to decide how it will react when it is treated like a string
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) array_sum($this->numbers);
    }
}
