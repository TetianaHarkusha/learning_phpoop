<?php
declare(strict_types = 1);
namespace Task6;

class Employee
{
    const MIN_AGE = 1;
    const MAX_AGE = 100;
    private $name;
    private $age;
    private $salary;

    public function __construct(string $name, int $age, float $salary)
    {
       $this->name = $name;
       $this->age = $age;
       $this->salary = $salary; 
    }

	public function __set($property, $value): void
	{
		$this->$property = $value;
	}

	public function setAge($age): void
	{
		if (self::isAgeCorrect($age)) {
			$this->age = $age;
		}
	}

	public function __get($property)
	{
		return $this->$property;
	}

	public function getSalary(): string
	{
		return $this->salary . '$';
	}

	private static function isAgeCorrect(int $age): bool
	{
		return ($age >= self::MIN_AGE && $age <= self::MAX_AGE);
	}
}
