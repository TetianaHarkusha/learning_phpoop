<?php

declare(strict_types=1);

namespace Task15;

//The class for information about employees
class Employee
{
    private string $name;
    private string $surname;
    private Post $post;

    /**
     * The constructor method for the class
     *
     * @param string $name
     * @param string $surname
     * @param Post $post //The object of class Post
     */
    public function __construct(string $name, string $surname, Post $post)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
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
     *  The method get for the property post
     *
     * @return Post
     */
    public function getPost(): Post
    {
        return $this->post;
    }

    /**
     *  The method set for the property name
     *
     * @param string
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     *  The method set for the property surname
     *
     * @param string
     * @return void
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     *  The method changes a property Post
     *
     * @param Post
     * @return void
     */
    public function changePost(Post $post): void
    {
        $this->post = $post;
    }
}
