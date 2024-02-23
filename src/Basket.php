<?php

require_once 'src/SimpleProduct.php';
require_once 'src/Displayable.php';
require_once 'src/User.php';
require_once 'src/Business.php';
class Basket implements Displayable
{
    public array  $products;
    public User $customer;

    public function __construct (User $customer)
    {
        $this->customer = $customer;
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
}