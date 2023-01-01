<?php

declare(strict_types=1);

namespace Task19;

//The test class uses traits
class Test
{
    use Trait2; //connects trait

    /**
     *  The method get a sum for method1, method2 and method3
     *
     * @return int
     */
    public function getSum(): int
    {
        return $this->method1() + $this->method2() + $this->method3();
    }
}
