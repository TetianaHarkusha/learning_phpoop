<?php

declare(strict_types=1);

namespace Task15;

// The class for working with numbers
class Num
{
    private static int $num1 = 2; //the static property, default value
    private static int $num2 = 3; //the static property, default value

    /**
     *  The static method prints the sum of static property values of class
     *
     * @return float
     */
    public static function getSum(): float
    {
        return self::$num1 + self::$num2;
    }
}
