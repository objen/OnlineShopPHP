<?php

require_once 'src/BaseProduct.php';
require_once 'src/Displayable.php';
require_once 'src/User.php';
require_once 'src/Business.php';
class Basket implements Displayable
{
    public array $products;
    public User $customer;
    public float $productPrice = 0;
    public float $shippingPrice = 0;
    public float $vatDue = 0;
    public float $totalBasket = 0;

    public function __construct(User $customer)
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

    //    Calculate cost of goods
    public function getProductPrice(): float|string
    {
        if (isset($this->products)) {
            foreach ($this->products as $product) {
                $this->productPrice += $product->discountPrice;
            }
            return $this->productPrice;
        } else {
            return 'Basket is empty';
        }
    }

    //    Calculate cost of shipping
    public function getTotalShipping(): float|string
    {
        if (isset($this->products)) {
            foreach ($this->products as $product) {
                $this->shippingPrice += $product->getShippingCosts();
            }
            return $this->shippingPrice;
        } else {
            return 'Basket is empty';
        }
    }

    //    Calculate vat on goods and shipping
    public function getVAT(): float
    {
        if (isset($this->customer->vatNumber)) {
            $this->vatDue = 0;
        } else {
            $this->vatDue = round(($this->shippingPrice + $this->productPrice) * 0.2, 2);
        }
        return $this->vatDue;
    }

    public function getFullBasketCost(): float|string
    {
        if (isset($this->products)) {
            $this->getProductPrice();
            $this->getTotalShipping();
            $this->getVAT();
            $this->totalBasket = $this->productPrice + $this->shippingPrice + $this->vatDue;
            return $this->totalBasket;
        } else {
            return 'Basket is empty';
        }
    }
}