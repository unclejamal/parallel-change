export class ShoppingCart {
  price = 0;

  add = (price: number) => (this.price = price);

  calculateTotalPrice = () => this.price;

  numberOfProducts = () => 1;

  hasDiscount = () => this.price > 100;
}
