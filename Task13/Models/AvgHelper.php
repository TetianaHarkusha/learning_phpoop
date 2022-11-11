<?php

declare(strict_types=1);

namespace Task13;

// The class with the set of methods for calculating the mean of array elements,
// and also uses methods of class SumHelper (its parent class)
class AvgHelper extends SumHelper
{
    /**
     * Calculates the arithmetic mean of array numbers
     *
     * @param $arr The array of numbers
     * @return float
     */
    public function getAvg(array $arr): float
    {
        $cnt = count($arr);
        if ($cnt == 0) {
            return 0;
        }
        return array_sum($arr) / $cnt;
    }

    /**
     * Calculates the square mean of array numbers
     *
     * @param $arr The array of numbers
     * @return float
     */
    public function getMeanSquare(array $arr)
    {
        $cnt = count($arr);
        if ($cnt == 0) {
            return 0;
        }
        return pow($this->getSum2($arr) / $cnt, 1/2);
    }
}
