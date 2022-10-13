<?php
declare(strict_types = 1);
namespace Task8;

class Student
{
    const MAX_COURSE = 5;

    private $name;
    private $course = 1;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }
    }

    public function transferToNextCourse(): void
    {
        if (!self::isCourseCorrect(++$this->course)) {
            unset($this->course);
        }
    }

    private static function isCourseCorrect(int $course): bool
    {
        return $course <= self::MAX_COURSE;
    }
}
