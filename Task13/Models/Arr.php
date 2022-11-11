<?php

declare(strict_types=1);

namespace Task13;

//Class for working with arrays of numbers
class Arr
{
    private array $nums = []; //the array of numbers
    private AvgHelper $helper; //the object of class AvgHelper

    //constructor method for the class (created objects of classes SumHelper and AvgHelper)
    public function __construct()
    {
        $this->helper = new AvgHelper();
    }

     /**
     * Adds only numbers to the end of property nums.
     *
     * @param list of $num
     */
    public function add(...$num): void
    {
        foreach ($num as $n) {
            if (is_numeric($n)) {
                $this->nums[] = $n;
            }
        }
    }

    /**
     * Calculated sum of the second and third powers of the array elements.
     *
     * @return float
     */
    public function getSum23(): float
    {
        $nums = $this->nums;
        return $this->helper->getSum2($nums) + $this->helper->getSum3($nums);
    }

    /**
     * Calculated sum of an arithmetic mean and a square mean of the array elements.
     *
     * @return float
     */
    public function getAvgMeanSum(): float
    {
        $nums = $this->nums;
        return $this->helper->getAvg($nums) + $this->helper->getMeanSquare($nums);
    }
}
