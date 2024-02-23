<?php

require_once 'src/BaseProduct.php';
require_once 'src/Displayable.php';
require_once 'src/User.php';
require_once 'src/Business.php';
class Basket implements Displayable
{
    public array  $products;
    public User $customer;
    public float $totalPrice = 0;

    public function __construct (User $customer)
    {
        $this->customer = $customer;
    }
    public function addToBasket(BaseProduct $product): void
    {
        $this->products[] = $product;
    }
    public function getDisplay(): string
    {
        echo '<ul>';
        foreach ($this->products as $product) {
            echo '<li>' . $product->quickDisplay() . '</li>';
        }
        return '</ul>';
    }
    public function getTotalPrice(): float|string
    {
        if(isset($this->products)) {
            foreach ($this->products as $product) {
                $this->totalPrice += $product->discountPrice;
            }
            if (isset($this->customer->vatNumber))
            {
                return $this->totalPrice;
            } else
                return round($this->totalPrice * 1.2, 2);

        } else {
            return 'Basket is empty';
        }
    }
}