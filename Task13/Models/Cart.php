<?php

declare(strict_types=1);

namespace Task13;

//The class for working with a collection of products
class Cart
{
    public $products = []; //an array for object class Product

    /**
     * Adds the product to the array (collection of products).
     *
     * @param Product $product The object of class Product
     */
    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    /**
     * Deletes the product from the array .
     *
     * @param string $name The product name
     */
    public function remove(string $name)
    {
        foreach ($this->products as $key => $product) {
            if ($product->getName() === $name) {
                unset($this->products[$key]);
            }
        }
    }

    /**
     * Calculates the total cost of products.
     *
     * @return float
     */
    public function getTotalCost(): float
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum  += $product->getCost();
        }
        return $sum;
    }

    /**
     * Calculates the total quantity of products.
     *
     * @return int
     */
    public function getTotalQuantity(): int
    {
        $cnt = 0;
        foreach ($this->products as $product) {
            $cnt  += $product->getQuantity();
        }
        return $cnt;
    }

    /**
     * Calculates the arithmetic mean of products price.
     *
     * @return float
     */
    public function getAvgPrice(): float
    {
        return round($this->getTotalCost() / $this->getTotalQuantity(), 2);
    }
}
