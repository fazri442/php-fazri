<?php
echo "<b> Mencari Luas Persegi </b><br>";
function luas_persegi($sisi)
{
    echo "Sisinya Adalah : $sisi <br>";
    $hasil = $sisi * $sisi;
    echo "Luasnya = $hasil <br>";
}
luas_persegi(5);

echo "<hr>";
echo "<b> Mencari Luas Lingkaran </b> <br>";
function luas_lingkaran($jari)
{
    echo "Jari-jarinya Adalah : $jari <br>";
    $hasil1 = 3.14 * $jari * $jari;
    echo "Hasilnya Adalah : $hasil1 <br>";
}
luas_lingkaran(5);

echo "<hr>";
echo "<b> Mencari Luas Segitiga </b><br>";
function luas_segitiga($alas, $tinggi)
{
    echo "Alasnya Adalah : $alas <br>";
    echo "Tingginya : $tinggi <br>";
    $hasil2 = $alas * $tinggi / 2;
    echo "Hasilnya Adalah : $hasil2 <br>";
}
luas_segitiga(5, 4);

echo "<hr>";
echo "<b> Mencari Luas Persegi Panjang </b><br>";
function luas_persegiPanjang($panjang, $lebar)
{
    echo "Panjangnya Adalah : $panjang <br>";
    echo "Lebarnya Adalah : $lebar <br>";
    $hasil3 = $panjang * $lebar;
    echo "Hasilnya Adalah : $hasil3 <br>";
}

luas_persegiPanjang(10, 50);
