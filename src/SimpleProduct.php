<?php

require_once 'src/Displayable.php';

class SimpleProduct implements Displayable
{
    public string $title;
    public string $description;
    public float $price;

    public function __construct(string $title, string $description, float $price)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
    }

    public function getDisplay(): string
    {
       return '<div class="product">
        <h3>' . $this->title . '</h3>
        <span>£' . $this->price . '</span>
        <p>' . $this->description .'</p>
        </div>';
    }
}