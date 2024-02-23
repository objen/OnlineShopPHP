<?php

require_once 'src/Displayable.php';
require_once 'src/Buyable.php';

class SimpleProduct implements Displayable
{
    public string $title;
    public string $description;
    public float $price;
    protected float  $discountPrice;
    public int|false $discount;

    public function __construct(string $title, string $description, float $price, int|false $discount = false)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->discount = $discount;
        if ($discount) {
            $this->discountPrice = round((1 - ($discount / 100)) * $price, 2);
        } else
        {
            $this->discountPrice = $price;
        }
    }

    public function getDisplay(): string
    {
        if ($this->discount === false) {
            return '<div class="product">
            <h3>' . $this->title . '</h3>
            <span>£' . $this->price . '</span>
            <p>' . $this->description . '</p>
            </div>';
        } else {
            return '<div class="product">
            <h3>' . $this->title . '</h3>
            <span class="old-price">£' . $this->price . ' </span>
            <span class="discount">' . $this->discount . '% discount - £' . $this->discountPrice . '</span>
            <p>' . $this->description . '</p>
            </div>';
        }
    }
}