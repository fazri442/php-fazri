<?php
//variabel
$nama = "Fazri";
$jk = "laki-laki";
$jenis = "makanan";
$menu = "ayam goreng";
$jumlah = 3;

//output
echo "~~~~~~Restoran Selalu Rame~~~~~~<br><br>";
echo "Nama : $nama<br>";
echo "jenis kelamin : $jk<br>";
echo "Jenis : $jenis<br>";
echo "Menu : $menu<br>";

if ($jenis === "makanan") {

    if ($menu == "nasi goreng") {
        echo "Harga : Rp. 10.000<br>";
        echo "<hr>";
        $hasil = 10000 * $jumlah;
        echo "Total : Rp. $hasil<br>";

        if ($hasil >= 50000) {
            $diskon = $hasil * 0.2;
            echo "Diskon : Rp. $diskon<br>";
            $bayar = $hasil - $diskon;
            echo "Total Bayar : Rp. $bayar";
        } else {
            echo "Diskon Tidak Ada<br>";
            echo "Total Bayar : Rp. $hasil";
        }
    } elseif ($menu == "mie goreng") {
        echo "Harga : Rp. 15.000<br>";
        echo "<hr>";
        $hasil = 15000 * $jumlah;
        echo "Total : Rp. $hasil<br>";

        if ($hasil >= 50000) {
            $diskon = $hasil * 0.2;
            echo "Diskon : Rp. $diskon<br>";
            $bayar = $hasil - $diskon;
            echo "Total Bayar : Rp. $bayar";
        } else {
            echo "Diskon Tidak Ada<br>";
            echo "Total Bayar : Rp. $hasil";
        }
    } elseif ($menu == "ayam goreng") {
        echo "Harga : Rp. 20.000<br>";
        echo "<hr>";
        $hasil = 20000 * $jumlah;
        echo "Total : Rp. $hasil<br>";

        if ($hasil >= 50000) {
            $diskon = $hasil * 0.2;
            echo "Diskon : Rp. $diskon<br>";
            $bayar = $hasil - $diskon;
            echo "Total Bayar : Rp. $bayar";
        } else {
            echo "Diskon Tidak Ada<br>";
            echo "Total Bayar : Rp. $hasil";
        }
    } else {
        echo "Menu tidak ada";
    }

} elseif ($jenis === "minuman") {

    if ($menu == "air mineral") {
        echo "Harga : Rp. 5.000<br>";
        echo "<hr>";
        $hasil = 5000 * $jumlah;
        echo "Total : Rp. $hasil<br>";

        if ($hasil >= 50000) {
            $diskon = $hasil * 0.2;
            echo "Diskon : Rp. $diskon<br>";
            $bayar = $hasil - $diskon;
            echo "Total Bayar : Rp. $bayar";
        } else {
            echo "Diskon Tidak Ada<br>";
            echo "Total Bayar : Rp. $hasil";
        }
    } elseif ($menu == "fresh tea") {
        echo "Harga : Rp. 7.000<br>";
        echo "<hr>";
        $hasil = 7000 * $jumlah;
        echo "Total : Rp. $hasil<br>";

        if ($hasil >= 50000) {
            $diskon = $hasil * 0.2;
            echo "Diskon : Rp. $diskon<br>";
            $bayar = $hasil - $diskon;
            echo "Total Bayar : Rp. $bayar";
        } else {
            echo "Diskon Tidak Ada<br>";
            echo "Total Bayar : Rp. $hasil";
        }
    } elseif ($menu == "jus") {
        echo "Harga : Rp. 12.000<br>";
        echo "<hr>";
        $hasil = 12000 * $jumlah;
        echo "Total : Rp. $hasil<br>";

        if ($hasil >= 50000) {
            $diskon = $hasil * 0.2;
            echo "Diskon : Rp. $diskon<br>";
            $bayar = $hasil - $diskon;
            echo "Total Bayar : Rp. $bayar";
        } else {
            echo "Diskon Tidak Ada<br>";
            echo "Total Bayar : Rp. $hasil";
        }
    } else {
        echo "Menu tidak ada";
    }

} else {
    echo "Menu Tidak Ada";
}
