<?php

$novel = [
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi bala",
        "tanggal_rilis" => "10 November 2024",
        "penerbit" => "Airlangga",
    ],
    [
        "judul" => "Tenggelamnya Kapal Van Der Wick",
        "penulis" => "Hamka",
        "tanggal_rilis" => "19 Desember 2013",
        "penerbit" => "PTS Publishing House",
    ],
    [
        "judul" => "Bumi Manusia",
        "penulis" => "Pramoedya Ananta Toer",
        "tanggal_rilis" => "1 Agustus 1980",
        "penerbit" => "Hasta Mitra",
    ],
    [
        "judul" => "Bangku Kosong",
        "penulis" => "Ruwi Meita",
        "tanggal_rilis" => "1 November 2006",
        "penerbit" => "Gagas Media",
    ],
    [
        "judul" => "Si Bedog Panjang",
        "penulis" => "Ki Umbara",
        "tanggal_rilis" => "1 januari 2011",
        "penerbit" => "Kiblat buku utama",
    ],
];
foreach ($novel as $buku) {
    echo "judul : " . $buku["judul"] . "<br>";
    echo "penulis : " . $buku["penulis"] . "<br>";
    echo "tanggal rilis : " . $buku["tanggal_rilis"] . "<br>";
    echo "penerbit : " . $buku["penerbit"] . "<br>";
    echo "<hr>";
}
