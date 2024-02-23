<?php

require_once 'src/BaseProduct.php';
require_once 'src/SmallProduct.php';
require_once 'src/LargeProduct.php';
require_once 'src/Basket.php';
require_once 'src/User.php';
require_once 'src/Business.php';
require_once 'src/Customer.php';


$coat = new SmallProduct('Rain Coat', 'A colourful raincoat to keep you dry in the worst of the British weather.',23.50, 41.5 );
$jumper = new SmallProduct('Red Jumper', 'This cosy sweater is perfect mix of traditional style and modern tailoring.',34.99, 1.2 , 10);
$wardrobe = new LargeProduct('Wardrobe','Very large wardrobe for all your clothing storage needs. ', 750, 190, 180,85 );
$sofa = new LargeProduct('Squashy Sofa', 'A squashy sofa that will keep the whole family happy.', 1500, 220, 150, 120, 15);
$gardenOffice = new LargeProduct('Garden Office', 'A swanky garden office so you can work in peace.', 15000, 550, 300, 430, );
$jones = new Customer('Sarah', 'Jones', '60 Acacia Avenue', 'BS7 8AF', 'sj@jones.com');

$inca = new Business('Sarah', 'Jones', '60 Acacia Avenue', 'BS7 8AF', 'sj@jones.com', 'Inca Shipping', 'GB98734098237409238');

$basket = new Basket ($inca);


$basket->addToBasket($jumper);
$basket->addToBasket($coat);
$basket->addToBasket($sofa);
echo $basket->getDisplay();

echo $basket->getFullBasketCost();

