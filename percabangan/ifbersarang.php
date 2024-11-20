<?php

$jurusan = "RPL";
$kelas = "11 RPL";

if ($jurusan == "RPL") {

    if ($kelas == "10 RPL") {
        echo "Ini Kelas 10 RPl";
    } elseif ($kelas == "11 RPL") {
        echo "Ini Kelas 11 RPL";
    } elseif ($kelas == "12 RPL") {
        echo "Ini Kelas 12 RPL";
    } else {
        echo "Kelas Tidak Ada";
    }

} elseif ($jurusan == "TKRO") {

    if ($kelas == "10 TKRO") {
        echo "Ini Kelas 10 TKRO";
    } elseif ($kelas == "11 TKRO") {
        echo "Ini Kelas 11 TKRO";
    } elseif ($kelas == "12 TKRO") {
        echo "Ini Kelas 12 TKRO";
    } else {
        echo "Kelas Tidak ada";
    }

} elseif ($jurusan == "TBSM") {

    if ($kelas == "10 TBSM") {
        echo "Ini Kelas 10 TBSM";
    } elseif ($kelas == "11 TBSM") {
        echo "Ini Kelas 11 TBSM";
    } elseif ($kelas == "12 TBSM") {
        echo "Ini Kelas 12 TBSM";
    } else {
        echo "Kelas Tidak Ada";
    }

} else {
    echo "Jurusan tidak tersedia";
}
