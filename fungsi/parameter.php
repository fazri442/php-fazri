<?php

function biodata($nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $hobi)
{
    echo "Nama : $nama<br>";
    echo "Tempat Lahir : $tempat_lahir<br>";
    echo "Tanggal Lahir : $tanggal_lahir<br>";
    echo "Jenis Kelamin : $jenis_kelamin<br>";
    echo "Agama : $agama<br>";
    echo "Alamat : $alamat<br>";
    echo "Hobi : $hobi<br>";
}

biodata("Fazri", "Bandung", "04-05-2008", "Laki-laki", "Islam", "Parung halang", "Bermain Game");
echo "<br>";
echo "<hr>";
echo "<br>";
function menghitung($angka1, $angka2)
{
    echo "Bilangan 1 : $angka1 <br>";
    echo "Bilangan 2 : $angka2 <br>";
    $hasil = $angka1 + $angka2;
    echo "Hasilnya : $hasil";
}

menghitung(10, 20);
