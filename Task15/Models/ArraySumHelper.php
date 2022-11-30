<?php

declare(strict_types=1);

namespace Task15;

use Exception;

//The class with the set of static methods for working with arrays
class ArraySumHelper
{
    /* Finds the sum of the first powers of the array elements: */
    public static function getSum1(array $arr)
    {
        return self::getSum($arr, 1);
    }

    /* Finds the sum of the second powers of the elements of the array */
    public static function getSum2(array $arr)
    {
        return self::getSum($arr, 2);
    }

    /* Finds the sum of the third powers of the elements of the array */
    public static function getSum3(array $arr)
    {
        return self::getSum($arr, 3);
    }

    /* Finds the sum of the fourth powers of the elements of the array */
    public static function getSum4($arr)
    {
        return self::getSum($arr, 4);
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
}
