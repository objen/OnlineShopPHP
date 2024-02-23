<?php
require_once 'src/BaseProduct.php';
class LargeProduct extends BaseProduct implements Displayable, QuickDisplay
{
    public float $width;
    public float $height;
    public float $depth;

    public function __construct(string $title, string $description, float $price, float $width, float $height, float $depth, int|false $discount = false,)
    {
        parent::__construct($title, $description, $price, $discount);
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }
    public function getShippingCosts(): float
    {
        if ($this->discountPrice >= 10000){
            $this->shippingCost= 0;
        } else {
            if ($this->width <= 200 && $this->depth <= 200 && $this->height <= 200) {
                $this->shippingCost = 150;
            } elseif ($this->width <= 500 && $this->depth <= 500 && $this->height <= 500) {
                $this->shippingCost = 200;
            } elseif ($this->width > 500 || $this->depth > 500 || $this->height > 500){
                $this->shippingCost = 600;
            }
        }
        return $this->shippingCost;
    }

}