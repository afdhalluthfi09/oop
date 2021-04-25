<?php 

// cara memanggil class dengan namespace
require_once 'compile.php';
require_once 'helper.php';

$object = new \PHP2021\product\Product();
$object->sayHello("Bambu");
//======cara memanggil namepace nonclass=======
//dengan menyebutkna nama namespace lalu isi dari namespace
Helper\sayHello();
