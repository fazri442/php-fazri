<?php
class bangun_datar
{

    public $luas_persegi;
    public $luas_lingkaran;
    public $luas_segitiga;
    public $luas_persegiPanjang;

function luas_persegi($sisi)
{
    echo "Sisinya Adalah : $sisi <br>";
    $this->luas_persegi = $sisi * $sisi;
    echo "Luasnya = $this->luas_persegi <br>";
}

function luas_lingkaran($jari)
{
    echo "Jari-jarinya Adalah : $jari <br>";
    $this->luas_lingkaran = 3.14 * $jari * $jari;
    echo "Hasilnya Adalah = $this->luas_lingkaran <br>";
}

function luas_segitiga($alas, $tinggi)
{
    echo "Alasnya Adalah : $alas <br>";
    echo "Tingginya : $tinggi <br>";
    $this->luas_segitiga = $alas * $tinggi / 2;
    echo "Hasilnya Adalah = $this->luas_segitiga <br>";
}

function luas_persegiPanjang($panjang, $lebar)
{
    echo "Panjangnya Adalah : $panjang <br>";
    echo "Lebarnya Adalah : $lebar <br>";
    $this->luas_persegiPanjang = $panjang * $lebar;
    echo "Hasilnya Adalah = $this->luas_persegiPanjang <br>";
}

}

$cetak = new bangun_datar();
echo "<b>Menghitung Luas Persegi</b><br>";
echo $cetak -> luas_persegi(6);
echo "<hr><br>";
echo "<b>Menghitung Luas Lingkaran</b><br>";
echo $cetak -> luas_lingkaran(10);
echo "<hr><br>";
echo "<b>Menghitung Luas segitiga</b><br>";
echo $cetak -> luas_segitiga(10, 5);
echo "<hr><br>";
echo "<b>Menghitung Luas Persegi panjang</b><br>";
echo $cetak -> luas_persegiPanjang(10, 8);