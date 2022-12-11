package com.pduda.field;

import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;
public class ShoppingCartTest {


    @Test
    public void singleItem_numberOfProductsInTheCart() throws Exception {
        ShoppingCart shoppingCart = new ShoppingCart();
        shoppingCart.add(10);

        Assertions.assertEquals(1, shoppingCart.numberOfProducts());
    }

    @Test
    public void singleItem_totalPrice() throws Exception {
        ShoppingCart shoppingCart = new ShoppingCart();
        shoppingCart.add(10);

        Assertions.assertEquals(10, shoppingCart.calculateTotalPrice());
    }

    @Test
    public void singleItem_hasDiscountIfContainsAtLeastOneProductWorthAtLeast100() throws Exception {
        ShoppingCart shoppingCart = new ShoppingCart();
        shoppingCart.add(100);

        Assertions.assertTrue(shoppingCart.hasDiscount());
    }

    @Test
    public void singleItem_doesNotHaveDiscountIfContainsNoProductsWorthAtLeast100() throws Exception {
        ShoppingCart shoppingCart = new ShoppingCart();
        shoppingCart.add(99);

        Assertions.assertFalse(shoppingCart.hasDiscount());
    }

}
