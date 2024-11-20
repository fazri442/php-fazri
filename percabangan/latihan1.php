<?php

//variabel
$nama = "Dudi Similikiti";
$kelas = "XI RPL 1";
$indo = 80;
$ing = 70;
$mtk = 80;
$pro = 90;
$hasil = ($indo + $ing + $mtk + $pro) / 4;

//output
echo "Nama : $nama<br>";
echo "Kelas : $kelas<br>";
echo "Nilai B.Indonesia : $indo<br>";
echo "Nilai B.Inggris : $ing<br>";
echo "Nilai Matematika : $mtk<br>";
echo "Nilai Produktif : $pro<br>";
echo "Rata Rata : $hasil<br>";
echo "<hr>";

//lulus atau tidak lulus
echo "Status : ";
$rata = $hasil;
if ($rata > 75) {
    echo "* lulus *";
} else {
    echo "* tidak lulus *";
}
