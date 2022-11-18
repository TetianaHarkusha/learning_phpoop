<?php

declare(strict_types=1);

namespace Task14;

//The class for working with a collection of users, employees and cities
class ObjectsCollection
{
    private $arr = []; //the array of users, employees and cities

    /**
     * Adds an object to the array (collection of users, employees and cities).
     *
     * @param User|Employee|City $obj The object of class User, Employee or City
     */
    public function add(User|Employee|City $obj)
    {
        if (!in_array($obj, $this->arr)) {
            $this->arr[] = $obj;
        }
    }

    /**
     * Returns the array of users, employees or cities
     *
     * @return array
     */
    public function get(): array
    {
        return $this->arr;
    }

    /**
     * Prints the objects names of class Users or its children class
     *
     * @return void
     */
    public function printUserNames(): void
    {
        foreach ($this->arr as $obj) {
            if ($obj instanceof User) {
                echo $obj->name . ' <br>';
            }
        }
    }

    /**
     * Prints the objects names that are not in class User
     *
     * @return void
     */
    public function printNotUserNames(): void
    {
        foreach ($this->arr as $obj) {
            if (!($obj instanceof User)) {
                echo $obj->name . ' <br>';
            }
        }
    }

    /**
     * Prints the objects names of class Users not its children class
     *
     * @return void
     */
    public function printOnlyUserNames(): void
    {
        foreach ($this->arr as $obj) {
            if (get_class($obj) == __NAMESPACE__ . '\\' .'User') {
                echo $obj->name . ' <br>';
            }
        }
    }
}
