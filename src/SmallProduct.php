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
}