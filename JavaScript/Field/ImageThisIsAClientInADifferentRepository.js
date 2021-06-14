import ShoppingCart from './ShoppingCart';

class ImagineThisIsAClientInADifferentRepository {
	FormattedPrice = () => {
		var cart = new ShoppingCart();
		cart.Add(10);
		return `Total price is ${cart.CalculateTotalPrice()} euro`;
	};
}

export default ImagineThisIsAClientInADifferentRepository;
