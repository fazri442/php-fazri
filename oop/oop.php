<?php

// class manusia
// {
//     public $nama;
//     public $warna;

//     public function tampilkan_nama()
//     {
//         return "Nama Saya Fazri<br>";
//     public function warna_kulit()
//     {
//         return "Warna Kulit Saya Adalah Hitam<br>";
//     }
// }
// $manusia = new manusia();
// echo $manusia->tampilkan_nama();
// echo $manusia->warna_kulit();

class kucing
{
    var $warna;
    var $jenis;

    public function makan()
    {
        echo "kucing suka makan wiskhas";
    }
    public function minum()
    {
        echo "kucing suka minum air";
    }
}
$cetak = new kucing();
echo $cetak->makan() . "<br>";
echo $cetak->minum() . "<br>";

echo $cetak->warna = "Hitam";
echo "<br>";
echo $cetak->jenis = "anggora";
