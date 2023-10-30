import ShoppingCart from '../Field/ShoppingCart';

describe('a ShoppingCart (with 1 product, worth 10)', () => {
	let cart;
	beforeEach(() => {
		cart = new ShoppingCart();
		cart.add(10)
	});

	it('calculates the final price', () => {
		expect(cart.calculateTotalPrice()).toBe(10);
	});

	it('knows the number of products', () => {
		expect(cart.numberOfProducts()).toBe(1);
	});

	it('may offer discounts when there is at least one expensive product', () => {
		cart.add(120);
		expect(cart.hasDiscount()).toBeTruthy();
	});

	it('does not offer discount for cheap products', () => {
		expect(cart.hasDiscount()).toBeFalsy();
	});
});
