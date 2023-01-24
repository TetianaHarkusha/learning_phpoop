<?php

declare(strict_types=1);

namespace Task20;

use Exception;

//Class for working with dates
class Date
{
    public int $year;
    public int $month;
    public int $day;

    //The magic get method for the property 'weekDay'
    public function __get($property)
    {
        if ($property = 'weekDay') {
            return date("l", mktime(0, 0, 0, $this->month, $this->day, $this->year));
        } else {
            throw new Exception('This property is undefined.');
        }
    }
}
