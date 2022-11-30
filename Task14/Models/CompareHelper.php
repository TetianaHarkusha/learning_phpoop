<?php

declare(strict_types=1);

namespace Task14;

//The class with the set of methods for compare two objects
class CompareHelper
{
    // Compares two objects and returns true
    // if the objects are of the same class and have the same property values
    public function compare1(object $obj1, object $obj2): bool
    {
        if ($obj1 == $obj2) {
            return true;
        }
        return false;
    }

    // Compares two objects and returns true
    // if the objects refer to the same instance
    public function compare2(object $obj1, object $obj2): bool
    {
        if ($obj1 === $obj2) {
            return true;
        }
        return false;
    }

    /* Compares two objects and returns:
    1 - if the objects refer to the same instance
    0 - if the objects are of the same class and have the same property values
    -1 - in other cases */
    public function compare3(object $obj1, object $obj2): int
    {
        if ($obj1 === $obj2) {
            return 1;
        }
        if ($obj1 == $obj2) {
            return 0;
        }
        return -1;
    }
}
