<?php

namespace Task18;

//This interface declares the methods required for class Programmer
interface iProgrammer
{
    public function __construct(string $name, float $salary);
    public function getName();
    public function getSalary();
    public function getLangs();
    public function addLang(string $lang);
}
