<?php

$data = [
    [
        "nis" => "1001",
        "nama" => "Hadad",
        "kelas" => "XI RPL 1",
        "eskul" => ["Tari", "Karawitan"],
    ],
    [
        "nis" => "1002",
        "nama" => "sandi",
        "kelas" => "XI RPL 1",
        "eskul" => ["nama" => "Tari", "Karawitan", "Futsal"],
    ],
];

foreach ($data as $siswa) {
    echo "NIS : " . $siswa['nis'] . "<br>";
    echo "Nama : " . $siswa['nama'] . "<br>";
    echo "Kelas : " . $siswa['kelas'] . "<br>";

    foreach ($siswa['eskul'] as $es) {
        echo "$es <br>";
    }
    echo "<hr>";
}
