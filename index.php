<?php

require_once 'src/SimpleProduct.php';
require_once 'src/Basket.php';

$coat = new SimpleProduct('Rain Coat', 'A colourful raincoat to keep you dry in the worst of the British weather',23.50 );
$jumper = new SimpleProduct('Red Jumper', 'This cosy sweater is perfect mix of traditional style and modern tailoring.',34.99, 10 );
$basket = new Basket ('Ms Jones');
$basket->addToBasket($jumper);
$basket->addToBasket($coat);

echo $coat->getDisplay();
echo $jumper->getDisplay();
echo $basket->getDisplay();