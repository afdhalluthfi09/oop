<?php 


require_once 'protected.php';

use PHP2021\VISIBILTY\{Protect,childProtect};

$objek = new Protect('nokia');
echo $objek->Jumlah() . PHP_EOL;


$object1 = new childProtect(null);
echo $object1->Jumlah(). PHP_EOL;
echo $object1->parentProtect(). PHP_EOL;
