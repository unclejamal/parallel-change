package com.pduda.field;


import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;

public class ImagineThisIsAClientInADifferentRepositoryTest {


    @Test
    public void singleItem_numberOfProductsInTheCart() throws Exception {
        ImagineThisIsAClientInADifferentRepository client = new ImagineThisIsAClientInADifferentRepository();

        Assertions.assertEquals("Total price is 50 euro", client.formattedTotalPrice(50));
    }

}
