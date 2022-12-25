<?php

declare(strict_types=1);

namespace Task18;

//The class for information about programmers
class Programmer extends Employee implements iProgrammer
{
    private array $langs = []; //the array for languages

    /**
     *  The method get for the property Langs
     *
     * @return array
     */
    public function getLangs(): array
    {
        return $this->langs;
    }

    /**
     *  The method adds a value to the property Langs
     *
     * @param string $lang
     * @return void
     */
    public function addLang(string $lang): void
    {
        if (!in_array($lang, $this->langs)) {
            $this->langs[] = $lang;
        };
    }
}
