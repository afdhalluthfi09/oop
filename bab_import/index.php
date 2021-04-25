<?php 


// cara menggunkana  import pada php baca readme agar lebih jelas

require_once '../baa_namespace/helper.php';
require_once '../baa_namespace/Product.php';

//menggunakan keyword use untuk import;
use \PHP2021\product\Product;
use const Helper\API_KEY; //sebutin type datanya 
use function Helper\sayHello;


$object = new Product();
$object->sayHello('Budi');

sayHello();
echo API_KEY;

