<?php
 require_once 'src/BaseProduct.php';

class SmallProduct extends BaseProduct implements Displayable, QuickDisplay
{
    public float $weight;

    public function __construct(string $title, string $description, float $price, float $weight, int|false $discount = false,)
    {
        parent::__construct($title, $description, $price, $discount);
        $this->weight = $weight;
    }

    public function getShippingCosts(): float
    {
        if ($this->discountPrice > 100){
            $this->shippingCost= 0;
    } else {
        if ($this->weight < 10) {
            $this->shippingCost = 1.99;
        } elseif ($this->weight >= 10 && $this->weight <= 50) {
            $this->shippingCost = 4.99;
        } elseif ($this->weight >50){
            $this->shippingCost = 7.99;
        }
    }
        return $this->shippingCost;
    }
}
