<?php

$buah = [
    [
        "nama" => "Safitri",
        "suka" => [
            [
                "buah" => "anggur",
                "jenis" => ["jenis1" => "Anggur ijo", "jenis2" => "Anggur putih"],
            ],
        ],
    ],
    [
        "nama" => "Rahman",
        "suka" => [
            [
                "buah" => "Alpukat",
                "jenis" => ["jenis1" => "Alpukat Mentega", "jenis2" => "Alpukat biasa<br>"],
            ],
            [
                "buah" => "Apel",
                "jenis" => ["jenis1" => "Apel Merah", "jenis2" => "Apel Hijau"],
            ],
        ],
    ],
];

foreach ($buah as $data) {
    echo "Nama Pemilik : " . $data["nama"] . "<br>";
    echo "Buah Kesukaan : <ul>";
    foreach ($data["suka"] as $suka) {
        echo "<li>" . $suka["buah"] . "</li><br>";
        foreach ($suka["jenis"] as $jenis) {
            echo $jenis . "<br>";
        }
    }
    echo "</ul><hr>";
}
