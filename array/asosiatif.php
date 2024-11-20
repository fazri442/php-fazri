<?php

$artikel = [
    "judul" => "Belajar Pemnograman PHP",
    "penulis" => "Petani Kode",
    "view" => 128,
    "tanggal" => "20 juni 2008",
];

echo "<h2>" . $artikel["judul"] . "</h2>";
echo "<p>oleh: " . $artikel["penulis"] . "</p>";
echo "<p>View: " . $artikel["view"] . "</p>";
echo "<p>Tanggal: " . $artikel["tanggal"] . "</p>";
