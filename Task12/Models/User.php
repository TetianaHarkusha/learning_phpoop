<?php

declare(strict_types=1);

namespace Task12;

use Exception;

//The class for information about people, parent class
class User
{
    public const MIN_BIRTHDAY = '1900-1-1'; //min value for property birthday

    protected string $name;
    protected string $surname;
    private string $birthday;
    private int $age;

    /**
     * The constructor method for the class
     * with initial values of properties name and surname
     *
     * @param string $birthday The date in format 'Y-m-d'
     */
    public function __construct(string $birthday)
    {
        $this->name = 'Іван'; //Initial values
        $this->surname ='Іванов'; //Initial values
        if ($this->isBirthdayCorrect($birthday)) {
            $this->birthday = $birthday;
            $this->age = $this->calculateAge($birthday);
        }
    }

    /**
     *  The method get for the property name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *  The method get for the property surname
     *
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     *  The method get for the property birthday
     *
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     *  The method get for the property age
     *
     * @return string
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     *  The method to check a date
     * (correct date format, validate a Gregorian date,
     * more than MIN_BIRTHDAY
     * and less than a current day)
     *
     * @param string $birthday The date in format 'Y-m-d'
     * @return string
     */
    private function isBirthdayCorrect(string $birthday): bool
    {
        //a regular expression for a date format
        $pattern = '#^[0-9]{4}-([0]?[1-9]|[1][0-2])-([0]?[1-9]|[1-2][0-9]|[3][0-1])$#';

        $datePars = date_parse_from_format('Y-m-d', $birthday);

        //checking for a date format
        if (!preg_match($pattern, $birthday, $matches)) {
            throw new Exception('Incorrect date format');
        }

        //checking for validate a Gregorian date
        if (!checkdate($datePars['month'], $datePars['day'], $datePars['year'])) {
            throw new Exception('No validate a Gregorian date');
        }

        //checking for range
        if (strtotime($birthday) < strtotime(self::MIN_BIRTHDAY)) {
            throw new Exception('Birthday is less than the minimum');
        }
        if (strtotime($birthday) > strtotime(date('Y-m-d'))) {
            throw new Exception('Birthday is more than the current date');
        }

        return true;
    }

    /**
     *  The method of calculating age
     *  by the date of birth on the current day
     *
     * @param string $birthday The date in format 'Y-m-d'
     * @return int
     */
    private function calculateAge(string $birthday): int
    {
        $datPars = date_parse(date('Y-m-d'));
        $birthPars = date_parse($birthday);
        $age = $datPars['year'] - $birthPars['year'];
        if ($datPars['month'] > $birthPars['month']) {
            return $age;
        }
        if ($datPars['month'] = $birthPars['month'] and $datPars['day'] >= $birthPars['day']) {
            return $age;
        }
        return --$age;
    }
}
