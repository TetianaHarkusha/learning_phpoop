<?php

declare(strict_types=1);

namespace Task10;

//Class for working with arrays of numbers
class Arr
{
    private array $numbers = []; //array for numbers

    /**
     * constructor method for the class
     * adds filtered array of numbers to property of class
     *
     * @param array $numbers
     */
    public function __construct(array $numbers)
    {
        $this->numbers = self::doArrayCorrect($numbers);
    }

    /**
     * Adds only numbers to the end of property.
     *
     * @param list of $num
     * @return $this (the reference to the updated class object)
     */
    public function add(...$num)
    {
        foreach ($num as $n) {
            if (is_numeric($n)) {
                $this->numbers[] = $n;
            }
        }
        return $this;
    }

    /**
     * Adds only numbers from the array to the end of property.
     *
     * @param array $num
     * @return $this (the reference to the updated class object)
     */
    public function push(array $num)
    {
        $this->numbers = array_merge($this->numbers, self::doArrayCorrect($num));
        return $this;
    }

    /**
     * Calculates the sum of the numbers in the array of property.
     *
     * @return float
     */
    public function getSum(): float
    {
        return array_sum($this->numbers);
    }

    /**
     * Static method.
     * Filters the elements of an array,
     * leaving only values that convert to a number.
     *
     * @param array $num The array that needs to filter
     * @return array
     */
    private static function doArrayCorrect(array $num): array
    {
        return array_filter($num, "is_numeric") ?? [];
    }
}
