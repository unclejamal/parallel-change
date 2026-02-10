<?php

declare(strict_types=1);

namespace ParallelChange;

class ShoppingCart
{
    // The goal is to remove this field, replacing it with
    // private $prices = [];
    private $price = 0;

    public function add(int $price)
    {
        $this->price = $price;
    }

    public function getNumberOfProducts(): int
    {
        return 1;
    }

    public function calculateTotalPrice(): int
    {
        return $this->price;
    }

    public function hasDiscount(): bool
    {
        return $this->price >= 100;
    }
}
