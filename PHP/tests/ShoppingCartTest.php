<?php

declare(strict_types=1);

use ParallelChange\ShoppingCart;
use PHPUnit\Framework\TestCase;

class ShoppingCartTest extends PHPUnit_Framework_TestCase
{
    public function testShoppingCartMayHaveJustOneItem()
    {
        $shoppingCart = new ShoppingCart();
        $shoppingCart->add(10);

        $this->assertSame(1, $shoppingCart->getNumberOfProducts());
    }

    public function testShoppingCartHasTotalPriceEqualToTotalPriceOfItsContents()
    {
        $shoppingCart = new ShoppingCart();
        $shoppingCart->add(10);

        $this->assertSame(10, $shoppingCart->calculateTotalPrice());
    }

    public function testShoppingCartHasDiscountWhenContainsAtLeastOnePremiumItem()
    {
        $shoppingCart = new ShoppingCart();
        $shoppingCart->add(100);

        $this->assertTrue($shoppingCart->hasDiscount());
    }

    public function testShoppingCartDoesNotHaveDiscountWhenAllItemsAreCheap()
    {
        $shoppingCart = new ShoppingCart();
        $shoppingCart->add(10);

        $this->assertFalse($shoppingCart->hasDiscount());
    }
}
