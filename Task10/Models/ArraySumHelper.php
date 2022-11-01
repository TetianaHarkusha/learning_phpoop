<?php

declare(strict_types=1);

namespace Task10;

use Exception;

//The class with the set of methods for working with arrays
class ArraySumHelper
{
    /* Finds the sum of the first powers of the array elements: */
    public function getAvg1(array $arr)
    {
        return self::getSum($arr, 1);
    }

    /* Finds the sum of the second powers of the elements of the array and extracts the square root from it: */
    public function getAvg2(array $arr)
    {
        return self::calcSqrt(self::getSum($arr, 2), 2);
    }

    /* Finds the sum of the third powers of the elements of the array and extracts the cube root from it: */
    public function getAvg3(array $arr)
    {
        return self::calcSqrt(self::getSum($arr, 3), 3);
    }

    /* Finds the sum of the fourth powers of the elements of the array and extracts the root of the fourth power from it: */
    public function getAvg4($arr)
    {
        return self::calcSqrt(self::getSum($arr, 4), 4);
    }

    /**
     * The helper method
     * Calculates the sum of the powers of the elements in an array
     *
     * @param array $arr Array of numbers
     * @param int $power Power
     * @return float
     */
    private static function getSum($arr, int $power): float
    {
        $sum = 0;
        foreach ($arr as $element) {
            if (!is_numeric($element)) {
                throw new Exception('Некоректний елемент масиву');
            }
            $sum += pow($element, $power);
        }
        return $sum;
    }

    /**
     * The helper method
     * Calculates the root of a number
     *
     * @param float $num Number
     * @param int $power Power of the root
     * @return float
     */
    private static function calcSqrt(float $num, int $power): float
    {
        return pow($num, 1/$power);
    }
}
