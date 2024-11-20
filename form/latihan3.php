<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <center>
        <img src="perulangan/logo-smk.png" alt="" width="10%">
        <h2>Form Biodata Diri</h2>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" value=""></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" value=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki
                    <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Budha">Budha</option>
                    <option value="Ateis">Ateis</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td>
                    <select name="pendidikan_terakhir">
                        <option value="TK">TK</option>
                        <option value="TPQ">TPQ</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="MA">MA</option>
                        <option value="SMK">SMK</option>
                        <option value="Kuliah">Kuliah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <select name="status">
                        <option value="Belum menikah">Belum Menikah</option>
                        <option value="Pelajar">Pelajar</option>
                        <option value="Sudah menikah">Sudah Menikah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobi" value="Ngepus">Ngepus
                    <input type="checkbox" name="hobi" value="Membaca">Membaca
                    <input type="checkbox" name="hobi" value="Menulis">Menulis
                    <input type="checkbox" name="hobi" value="Olahraga">Olahraga
                    <input type="checkbox" name="hobi" value="Ngoding">Ngoding
                </td>
            </tr>
            <tr>
                <td>Cita-Cita</td>
                <td>:</td>
                <td>
                    <select name="cita-cita">
                        <option value="Progammer">Programmer</option>
                        <option value="Bekerja">Bekerja</option>
                        <option value="Nganggur">Nganggur</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kata-kata Bijak</td>
                <td>:</td>
                <td><textarea name="kata-kata"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="save" value="Kirim"></td>
            </tr>
        </table>
    </center>
    </form>
    <br><br>
</body>
</html>

<?php

if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $citacita = $_POST['cita-cita'];
    $katakata = $_POST['kata-kata'];

    echo "<center>";
    echo "============== Biodata ============== <br>";
    echo "================================== <br>";

    echo "Nama : $nama <br>";
    echo "Tempat Lahir : $tempat_lahir <br>";
    echo "Tanggal Lahir : $tanggal_lahir <br>";
    echo "Jenis Kelamin : $jenis_kelamin <br>";
    echo "Alamat : $alamat <br>";
    echo "Agama : $agama <br>";
    echo "Pendidikan Terakhir : $pendidikan_terakhir <br>";
    echo "Status : $status <br>";
    echo "Hobi : $hobi <br>";
    echo "Cita-Cita : $citacita <br>";
    echo "Kata-kata Bijak : $katakata <br>";

    echo "============== Penutup ============== <br>";
    echo "================================== <br>";

    echo "</center>";
}

?>