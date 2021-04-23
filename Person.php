<?php
// cara buat class 
class Person{
    //=================create property==============
    /* 
     ⚠ cara  mendeklarisiakn property dengan menggunakan "var"
     ⚠ cara mendefinisikan type property dengan menambahakan type datanya setelah kata "var" 
     ⚠ cara memberi default value pada property  cukup dengan mengisinya di saat penulisan seperti pada property address
     ⚠ cara memeberi nilai null pada property dengan cara memberi "?"  pada depan type data atau pada property-nya   
     */
    var string $name; 
    var ?string $address = null;
    var string $country ="Indonesia";
    //=================constan
    /* 
        ⚠ cara buat konstan
        ⚠ kegunaannya biasainay untuk mendifinisakan yang nilai valuenya tidak berubah ubah
    */
    const APP_VERSI ='1.0.0';
    const APP_AUTHOR ='Afdhal Luthfi';
    //================method========================
    /* 
        ⚠ bisa mendifinisikan type data param
        ⚠ bisa set param menjadi nullable dengan menambahakan tandanya didepan parameternya
        ⚠ penggunaan '$this->'ini digunaknan untuk mengambil object pada class  
     */
    public function sayHello(?string $name){

        if (is_null($name)) {
            # code...
            echo "Dia Mengatakan : $this->name" . PHP_EOL; //ini menangmbil value dari property

        }else{

            echo "Dia Mengatakan : $name".PHP_EOL; //ini mengambil nilai dari param function sayHello()
        }
    }

    public function info(){
        //keyword 'self' di tunjukan untuk nilai yang ada pada kelas tidak berubah ubah
        echo 'AUTHOR :' . self::APP_AUTHOR . PHP_EOL;
    }
}

// cara manggil class
$person = new Person();
//==========cara set property==========
$person->name ="afdhal";
$person->address="yogykarta";
$person->country="Indonesia";
//var_dump($person); //testing
//========== cara nampilin property
echo "nama : $person->nama".PHP_EOL; //php_eol : membuat baris baru setelah menampilkan echo
echo "nama : $person->address".PHP_EOL;
echo "nama : $person->country".PHP_EOL;
//==========cara manggil Method==========
$person->sayHello("Hai Luthfi");
// =========cara manggil konstan========
/* 
 constan bisa di panggil tanpa harus membuat object
*/
echo Person::APP_VERSI;