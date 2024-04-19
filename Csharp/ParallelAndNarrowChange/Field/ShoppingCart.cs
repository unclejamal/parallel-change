using System.Collections.Generic;
using System.Linq;

namespace ParallelAndNarrowChange.Field;

public class ShoppingCart{
    private const int MinimumPriceForDiscount = 100;
    private List<int> _prices;

    public ShoppingCart()
    {
        _prices = [];
    }

    public decimal CalculateTotalPrice(){
        return _prices.Sum();
    }

    public bool HasDiscount(){
        return _prices.Sum() > MinimumPriceForDiscount;
    }

    public void Add(int aPrice)
    {
        _prices.Add(aPrice);
    }

    public int NumberOfProducts(){
        return _prices.Count;
    }
}