<?php 

namespace PHP2021\VISIBILTY;

class Protect {
    // kelas ini hanya bisa di akses oleh turunan child class dan dirinya sendiri
    
    //======membuat property menjadi akses protected============

    protected ?string $namaProduk =null;
    protected int $harga;
    protected string $detail;


    public function __construct(?string $produk)
    {
        $this->namaProduk =$produk;
        
    }

    public function getProduct():void
    {
        echo $this->namaProduk;
    }

    public function Jumlah():int{
        return 0;
    }


}

class childProtect extends Protect{

    public function Jumlah(): int
    {
        return 4;
    }

    public function parentProtect(): int {
        return parent::Jumlah();
    }
}