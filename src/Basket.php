<?php

require_once 'src/SimpleProduct.php';
class Basket
{
    public array  $products;
    public string $customerName;

    public function __construct (string $customerName)
    {
        $this->customerName = $customerName;
    }
    public function addToBasket(SimpleProduct $product): void
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
    public function quickDisplay(): string
    {
        return 'Coming soon';
        //a quick overview of basket?
    }

}