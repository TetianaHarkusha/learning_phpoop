<?php
declare(strict_types = 1);
namespace Task6;
use Exception;

class Student
{
	const MIN_COURSE = 1;
	const MAX_COURSE = 5;
	
	private string $name;
	private int $course;
	
	public function __construct (string $name, int $course) 
	{
		// without using inCourseCorrect
		/*if ($course < self::MIN_COURSE || $course > self::MAX_COURSE) {
			throw new Exception('Невірне значення властивості course');
		}*/
		if (!self::isCourseCorrect($course)) {
			throw new Exception('Невірне значення властивості course');
		}
		$this->name = $name;
		$this->course = $course;
	}
	
	public function __get($name)
	{
		if (isset($this->$name)) {
			return $this->$name;
		}
	}
	
	/*
	// without using inCourseCorrect
	public function transferToNextCourse(): void
	{
		if ($this->course === self::MAX_COURSE) {
			unset($this->course);
		} else 	{
			++$this->course;
		}
	}*/

	public function transferToNextCourse(): void
	{
		if (!self::isCourseCorrect(++$this->course)) {
			unset($this->course);
		} else 	{
			$this->course;
		}
	}

	private static function isCourseCorrect(int $course): bool
	{
		return ($course >= self::MIN_COURSE && $course <= self::MAX_COURSE);
	}
}