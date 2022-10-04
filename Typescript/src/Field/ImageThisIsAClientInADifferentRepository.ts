import { ShoppingCart } from "./ShoppingCart";

export class ImagineThisIsAClientInADifferentRepository {
  FormattedPrice = () => {
    var cart = new ShoppingCart();
    cart.add(10);
    return `Total price is ${cart.calculateTotalPrice()} euro`;
  };
}
