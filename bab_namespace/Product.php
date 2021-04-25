<?php 

/**
 * namespace berfungsi untuk menyimpan beberapa class dalam satu script sehingga itu memudahkan kita dalam pengambilan atau pengolaan code kedepanya
 */
namespace PHP2021\product;

class Product {
    var string $nama_produk;
    var ?int $jumlah_produk =null;
    
    public function sayHello($name){
        echo "nama produk : $name";
    }
}