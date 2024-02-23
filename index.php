<?php

require_once 'src/SimpleProduct.php';

$coat = new SimpleProduct('Rain Coat', 'A colourful raincoat to keep you dry in the worst of the British weather',23.50 );
$jumper = new SimpleProduct('Red Jumper', 'This cosy sweater is perfect mix of traditional style and modern tailoring.',34.99 );

echo $coat->getDisplay();
echo $jumper->getDisplay();

