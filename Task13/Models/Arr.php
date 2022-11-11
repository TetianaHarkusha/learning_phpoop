<?php

declare(strict_types=1);

namespace Task13;

//Class for working with arrays of numbers
class Arr
{
    private array $nums = []; //the array of numbers
    private SumHelper $sumHelper; //the object of class SumHelper

    //constructor method for the class (created objects of classes SumHelper)
    public function __construct()
    {
        $this->sumHelper = new SumHelper();
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
        return $this->sumHelper->getSum2($this->nums) + $this->sumHelper->getSum3($this->nums);
    }
}
