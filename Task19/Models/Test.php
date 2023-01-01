<?php

declare(strict_types=1);

namespace Task19;

//The test class uses traits
class Test
{
    use Trait1, Trait2, Trait3 //connects traits
    {
        Trait1::method insteadof Trait2, Trait3;
        Trait1::method as method1;
        Trait2::method as method2;
        Trait3::method as method3;
    }

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
