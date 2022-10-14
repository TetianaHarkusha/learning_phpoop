<?php
declare(strict_types = 1);
namespace Task8;

class Student
{
    const MAX_COURSE = 5; //maximum value for property course

    private $name;
    private $course = 1; //default value 1

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    //magic method get for any property
    public function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }
    }

    //method for transferring a student to the next course
    public function transferToNextCourse(): void
    {
        if (!self::isCourseCorrect(++$this->course)) {
            unset($this->course);
        }
    }

    //static method for checking course
    private static function isCourseCorrect(int $course): bool
    {
        return $course <= self::MAX_COURSE;
    }
}
