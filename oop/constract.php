<?php

class kucing{

    public function __construct(){
        echo "Helllo Saya Kucing<br>";
    }
    public function makan(){
        echo "Kami Makan Wishkas<br>";
    }
    public function __destruct(){
        echo "Suaranya *purr";
    }
}

$cetak = new kucing();
echo $cetak -> makan();
