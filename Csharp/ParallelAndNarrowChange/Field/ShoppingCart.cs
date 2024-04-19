namespace ParallelAndNarrowChange.Field
{
    public class ShoppingCart{
        private decimal price;

        public decimal CalculateTotalPrice(){
            return price;
        }

        public bool HasDiscount(){
            return price > 100;
        }

        public void Add(int aPrice){
            this.price = aPrice;
        }

        public int NumberOfProducts(){
            return 1;
        }
    }
}
