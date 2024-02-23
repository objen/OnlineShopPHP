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
}