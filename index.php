<?php

require_once 'src/SimpleProduct.php';
require_once 'src/Basket.php';
require_once 'src/User.php';
require_once 'src/Business.php';
require_once 'src/Customer.php';


$coat = new SimpleProduct('Rain Coat', 'A colourful raincoat to keep you dry in the worst of the British weather.',23.50 );
$jumper = new SimpleProduct('Red Jumper', 'This cosy sweater is perfect mix of traditional style and modern tailoring.',34.99, 10 );
$jones = new Customer('Sarah', 'Jones', '60 Acacia Avenue', 'BS7 8AF', 'sj@jones.com');

$inca = new Business('Sarah', 'Jones', '60 Acacia Avenue', 'BS7 8AF', 'sj@jones.com', 'Inca Shipping', 'GB98734098237409238');

$basket = new Basket ($jones);
echo $basket->getTotalPrice();

$basket->addToBasket($jumper);
$basket->addToBasket($coat);
echo $basket->getDisplay();

echo $basket->getTotalPrice();

