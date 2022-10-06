<?php

namespace Task5;

class User 
{
    const MIN_AGE = 18;
	
    protected string $name;
    protected int $age;

    public function __construct(string $name, int $age)
    {
       $this->name = $name;
       $this->age = $age; 
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
    
    public function setAge(int $age): void
    {
        if ($age >= self::MIN_AGE) {
            $this->age = $age;
        } 
    }

}
