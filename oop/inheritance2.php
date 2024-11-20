<?php

class bangun_datar
{
    public $luas_persegi;
    public $luas_lingkaran;
    public $luas_segitiga;
    public $luas_persegiPanjang;

    public $keliling_persegi;
    public $keliling_lingkaran;
    public $keliling_segitiga;
    public $keliling_persegiPanjang;
}

class luas extends bangun_datar
{
    public function luas_persegi($sisi)
    {
        echo "<h2>Mencari Luas Persegi</h2>";
        echo "Sisinya Adalah : $sisi <br>";
        $this->luas_persegi = $sisi * $sisi;
        echo "Luasnya = $this->luas_persegi <br>";
    }
    public function luas_lingkaran($jari)
    {
        echo "<h2>Mencari Luas Lingkaran</h2>";
        echo "Jari-jarinya Adalah : $jari <br>";
        $this->luas_lingkaran = 3.14 * $jari * $jari;
        echo "Hasilnya Adalah : $this->luas_lingkaran <br>";
    }
    public function luas_segitiga($alas, $tinggi)
    {
        echo "<h2>Mencari Luas Segitiga</h2>";
        echo "Alasnya Adalah : $alas <br>";
        echo "Tingginya : $tinggi <br>";
        $this->luas_segitiga = $alas * $tinggi / 2;
        echo "Hasilnya Adalah : $this->luas_segitiga <br>";
    }
    public function luas_persegiPanjang($panjang, $lebar)
    {
        echo "<h2>Mencari Luas Persegi Panjang</h2>";
        echo "Panjangnya Adalah : $panjang <br>";
        echo "Lebarnya Adalah : $lebar <br>";
        $this->luas_persegiPanjang = $panjang * $lebar;
        echo "Hasilnya Adalah : $this->luas_persegiPanjang <br>";
    }
}
class keliling extends bangun_datar
{
    public function keliling_persegi($sisi)
    {
        echo "<h2>Mencari keliling Persegi</h2>";
        echo "Sisinya Adalah : $sisi <br>";
        $this->keliling_persegi = $sisi * $sisi * $sisi * $sisi;
        echo "Luasnya = $this->keliling_persegi <br>";
    }
    public function keliling_lingkaran($diameter)
    {
        echo "<h2>Mencari keliling Lingkaran</h2>";
        echo "Diameternya Adalah : $diameter <br>";
        $this->keliling_lingkaran = 3.14 * $diameter;
        echo "Hasilnya Adalah : $this->keliling_lingkaran <br>";
    }
    public function keliling_segitiga($sisiL)
    {
        echo "<h2>Mencari Keliling Segitiga</h2>";
        echo "Sisinya Adalah : $sisiL <br>";
        $this->keliling_segitiga = $sisiL + $sisiL + $sisiL;
        echo "Hasilnya Adalah : $this->keliling_segitiga <br>";
    }
    public function keliling_persegiPanjang($panjang, $lebar)
    {
        echo "<h2>Mencari Keliling Persegi Panjang</h2>";
        echo "Panjangnya Adalah : $panjang <br>";
        echo "Lebarnya Adalah : $lebar <br>";
        $this->keliling_persegiPanjang = ($panjang + $lebar) * 2;
        echo "Hasilnya Adalah : $this->keliling_persegiPanjang <br>";
    }
}

$cetak = new luas();
echo "<h2><center>Mencari Luas Bangun Datar</center></h2>";
echo $cetak->luas_persegi(5);
echo "<hr>";
echo $cetak->luas_lingkaran(8);
echo "<hr>";
echo $cetak->luas_segitiga(5, 10);
echo "<hr>";
echo $cetak->luas_persegiPanjang(10, 5);
echo "<hr>";

$cetak2 = new keliling();
echo "<h2><center>Mencari Keliling Bangun Datar</center></h2>";
echo $cetak2->keliling_persegi(5);
echo "<hr>";
echo $cetak2->keliling_lingkaran(7);
echo "<hr>";
echo $cetak2->keliling_segitiga(5);
echo "<hr>";
echo $cetak2->keliling_persegiPanjang(5, 10);
