<?php

namespace Task19;

// The test trait
trait TestTrait
{
    /**
     *  The test method
     *
     * @return int
     */
    public function method1(): int
    {
        return 1;
    }

    abstract public function method2();
}
