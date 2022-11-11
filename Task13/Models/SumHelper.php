<?php

declare(strict_types=1);

namespace Task13;

use Exception;

//The class with the set of methods for summing the powers of array elements
class SumHelper
{
    /* Finds the sum of the second powers of the array elements */
    public function getSum2(array $arr): float
    {
        return $this->getSum($arr, 2);
    }

    /* Finds the sum of the third powers of the array elements */
    public function getSum3(array $arr): float
    {
        return $this->getSum($arr, 3);
    }

    /**
     * The helper method
     * Calculates the sum of the powers of the elements in an array
     *
     * @param array $arr Array of numbers
     * @param int $power Power
     * @return float
     */
    private function getSum($arr, int $power): float
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
