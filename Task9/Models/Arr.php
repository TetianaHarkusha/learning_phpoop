<?php
declare(strict_types = 1);

namespace Task9;

use Exception;

class Arr
{
    private array $numbers = []; //array for numbers

    /**
     * Adds an array of numbers to the end of property.
     * 
     * @param array $num The array that will be filtered into an array of numbers.
     * @return void 
     */
    public function add(array $num): void
    {
        $num = self::doArrayCorrect($num);
        if (empty($num)) {
            throw new Exception("Властивості об'єкту не були добавлені, не числа");
        } 
        $this->numbers = array_merge($this->numbers, $num);
    }

    /**
     * Calculates the arithmetic mean of the numbers in the array of property.
     * 
     * @return float
     */
    public function getAvg(): float
    {
        $countNumbers = count($this->numbers);
        if ($countNumbers === 0) {
            throw new Exception('Відсутні властивості');
        }
        return array_sum($this->numbers) / $countNumbers;
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
        return array_filter($num,  "is_numeric") ?? [];
    }
}