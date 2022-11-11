<?php

declare(strict_types=1);

namespace Task13;

//Class for working with products
class Product
{
    private string $name; //a name of a product
    private float $price; //a price of a product
    private int $quantity; // a quantity of a product

    /**
     * The constructor method for the class
     *
     * @param string $name
     * @param float $price
     * @param int $quantity
     */
    public function __construct(string $name, float $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
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
     *  The method get for the property price
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     *  The method get for the property quantity
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     *  The method that calculated the total cost of the product
     *
     * @return float
     */
    public function getCost(): float
    {
        return $this->price * $this->quantity;
    }
}
