<?php 

class Manager {

    var string $name;
    

    /**
     * function name():void/int/string/float
     * artinya function ini tidak ada tipe pengembalian hasil
     * 
     */
    public function sayHello(string $name):void
    {
        echo "saya adalah {$name}";
    }
}

// =========mealkukan pewarisan (inheritance)
class viceManager extends Manager{

}