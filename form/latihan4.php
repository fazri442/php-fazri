<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Nilai Ujian Nasional</h2>
        <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="number" name="kelas" value=""></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan" id="">
                        <option value="RPL">RPL</option>
                        <option value="TBSM">TBSM</option>
                        <option value="TKRO">TKRO</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nilai Ujian</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Nilai B.Indo</td>
                <td>:</td>
                <td><input type="number" name="nilai_indo" value=""></td>
            </tr>
            <tr>
                <td>Nilai B.inggris</td>
                <td>:</td>
                <td><input type="number" name="nilai_ingg" value=""></td>
            </tr>
            <tr>
                <td>Nilai matematika</td>
                <td>:</td>
                <td><input type="number" name="math" value=""></td>
            </tr>
            <tr>
                <td>Nilai Produktif</td>
                <td>:</td>
                <td><input type="number" name="lab" value=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="save" value="Kirim"></td>
            </tr>
        </table>
        </form>
    </center>
    <br><br>
</body>
</html>

<?php

if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $indo = $_POST['nilai_indo'];
    $inggris = $_POST['nilai_ingg'];
    $matematika = $_POST['math'];
    $produktif = $_POST['lab'];

    echo "
    <center>
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>$nama</td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td>$kelas </td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td>$jurusan</td>
    </tr>
    <tr>
        <td>Nilai Bahasa Indonesia</td>
        <td>:</td>
        <td>$indo</td>
    </tr>
    <tr>
        <td>Nilai Bahasa Inggris</td>
        <td>:</td>
        <td>$inggris</td>
    </tr>
    <tr>
        <td>Nilai Matematika</td>
        <td>:</td>
        <td>$matematika</td>
    </tr>
    <tr>
        <td>Nilai Produktif</td>
        <td>:</td>
        <td>$produktif</td>
    </tr>";

    $total = ($indo + $inggris + $matematika + $produktif) / 4;
    if ($total > 75) {
        $hasil1 = "Anda Lulus";
    } else {
        $hasil1 = "Belum Lulus";
    }

    echo "
    <tr>
        <td>Nilai Rata-Rata</td>
        <td>:</td>
        <td>$total</td>
    </tr>
    <tr>
        <td>Status</td>
        <td>:</td>
        <td>$hasil1</td>
    </tr>
</table>
</center>";
}