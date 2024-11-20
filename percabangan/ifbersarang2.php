<?php

$prov = "jatim";
$kota = "depok";

if ($prov == "jabar") {

    echo "Selamat datang di dikota bandung<br>";
    if ($kota == "cimahi") {
        echo "Selamat datang di dikota cimahi";
    } elseif ($kota == "bogor") {
        echo "Selamat datang di dikota bogor";
    } elseif ($kota == "bekasi") {
        echo "Selamat datang di dikota bekasi";
    } elseif ($kota == "depok") {
        echo "Selamat datang di dikota depok";
    } else {
        echo "kota tidak tersedia";
    }

} elseif ($prov == "jatim") {

    echo "Selamat datang di dikota Surabaya<br>";
    if ($kota == "malang") {
        echo "Selamat datang di dikota malang";
    } elseif ($kota == "siduarjo") {
        echo "Selamat datang di dikota siduarjo";
    } elseif ($kota == "gresik") {
        echo "Selamat datang di dikota gresik";
    } elseif ($kota == "lamongan") {
        echo "Selamat datang di dikota lamongan";
    } else {
        echo "Kota tidak tersedia";
    }

} elseif ($prov == "jateng") {

    echo "Selamat datang di dikota semarang<br>";
    if ($kota == "banyuwangi") {
        echo "Selamat datang di dikota banyuwangi";
    } elseif ($kota == "salatiga") {
        echo "Selamat datang di dikota salatiga";
    } elseif ($kota == "blora") {
        echo "Selamat datang di dikota blora";
    } elseif ($kota == "boyolali") {
        echo "Selamat datang di dikota boyolali";
    } else {
        echo "kota tidak tersedia";
    }

} else {
    echo "Provinsi Tidak Ada";
}
