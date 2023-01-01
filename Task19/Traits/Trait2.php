<?php

namespace Task19;

// The test trait
trait Trait2
{
    use Trait1;

    /**
     *  The test method
     *
     * @return int
     */
    private function method3(): int
    {
        return 3;
    }
}
