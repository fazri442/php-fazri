<?php

// $siswa = ["Dudi", "Hendri", "Kiki", "Regita", "Eva"];

// echo $siswa[0];
// echo $siswa[1];
// echo $siswa[2];
// echo $siswa[3];
// echo $siswa[4];

$nama = ["Nabel", "Fauzan", "Regita", "Sidik", "Fazri", "Ilyas", "Ardhika", "Dhea", "Allya", "Kiki"];
$jk = ["Laki-laki", "Perempuan"];
$hobi = ["Membaca", "Mengaji", "Menulis", "Ngpus", "Rebahan"];

echo "Data Siswa<br>";
// echo "$nama[0] - $jk[0] - $hobi[0] <br>";
// echo "$nama[1] - $jk[0] - $hobi[1] <br>";
// echo "$nama[2] - $jk[1] - $hobi[4] <br>";
// echo "$nama[3] - $jk[0] - $hobi[2] <br>";
// echo "$nama[4] - $jk[0] - $hobi[3] <br>";
// echo "$nama[5] - $jk[0] - $hobi[1] <br>";
// echo "$nama[6] - $jk[0] - $hobi[3] <br>";
// echo "$nama[7] - $jk[1] - $hobi[2] <br>";
// echo "$nama[8] - $jk[1] - $hobi[2] <br>";
// echo "$nama[9] - $jk[0] - $hobi[0] <br>";

foreach ($nama as $siswa) {
    echo "$siswa <br>";
}
