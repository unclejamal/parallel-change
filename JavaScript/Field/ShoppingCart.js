class ShoppingCart {
	price = 0;

	add = (price) => (this.price = price);

	calculateTotalPrice = () => this.price;

	numberOfProducts = () => 1;

	hasDiscount = () => this.price > 100;
}

export default ShoppingCart;
