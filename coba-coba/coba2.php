<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Formulir Pendaftaran Siswa SMK ASSALAAM</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Data Diri Calon Pendaftar</legend>
        <table>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan" id="">
                        <option value="">Pilih Jurusan</option>
                        <option value="Rekayasa Perangkat Lunak(RPL)">Rekayasa Perangkat Lunak(RPL)</option>
                        <option value="Teknik Kendaraan Ringan Otomotif(TKRO)">Teknik Kendaraan Ringan Otomotif(TKRO)</option>
                        <option value="Teknik Bisnis Sepeda Motor(TBSM)">Teknik Bisnis Sepeda Motor(TBSM)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki">Laki-laki
                    <input type="radio" name="jk" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" id=""></td>
            </tr>
            <tr>
                <td>Nomor HP Siswa Yang Bisa Dihubungi</td>
                <td>:</td>
                <td><input type="text" name="nomor_siswa" id=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" id=""></td>
            </tr>
        </table>
        </fieldset>
        <fieldset>
            <legend>Alamat Calon Pendaftar</legend>
            <table>
                <tr>
                    <td>Provinsi</td>
                    <td>:</td>
                    <td><input type="text" name="provinsi" id=""></td>
                </tr>
                <tr>
                    <td>Kab / Kota</td>
                    <td>:</td>
                    <td><input type="text" name="kab/kota" id=""></td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>:</td>
                    <td><input type="text" name="kecamatan" id=""></td>
                </tr>
                <tr>
                    <td>Desa / Kelurahan</td>
                    <td>:</td>
                    <td><input type="text" name="desa/kelurahan" id=""></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" id=""></td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td><input type="text" name="kode_pos" id=""></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Data Asal Sekolah</legend>
            <table>
                <tr>
                    <td>Nama Asal Sekolah</td>
                    <td>:</td>
                    <td><input type="text" name="asal_sekolah" id=""></td>
                </tr>
                <tr>
                    <td>Alamat Sekolah</td>
                    <td>:</td>
                    <td><input type="text" name="alamat_sekolah" id=""></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Data Orang Tua</legend>
            <table>
                <tr>
                    <td>Nama Lengkap Ayah / Ibu / Wali</td>
                    <td>:</td>
                    <td>
                        <select name="pilih_wali" id="">
                            <option value="Ayah">Ayah</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Wali">Wali</option>
                        </select>
                        <input type="text" name="nama_ortu" id="">
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><input type="text" name="pekerjaan" id=""></td>
                </tr>
                <tr>
                    <td>Nomor HP Yang Bisa Dihubungi</td>
                    <td>:</td>
                    <td><input type="number" name="nomor_ortu" id=""></td>
                </tr>
                <tr>
                    <td>Alamat Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="alamat_ortu" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="save" value="save"></td>
                    <td></td>
                </tr>
            </table>
        </fieldset>
    </form><br><br>
    </center>
</body>
</html>

<?php

if(isset($_POST['save'])){
    $jurusan = $_POST['jurusan'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nomor_siswa = $_POST['nomor_siswa'];
    $email = $_POST['email'];
    $provinsi = $_POST['provinsi'];
    $kab_kota = $_POST['kab/kota'];
    $kecamatan = $_POST['kecamatan'];
    $desa_kelurahan = $_POST['desa/kelurahan'];
    $alamat = $_POST['alamat'];
    $kode_pos = $_POST['kode_pos'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $alamat_sekolah = $_POST['alamat_sekolah'];
    $pilih_wali = $_POST['pilih_wali'];
    $nama_ortu = $_POST['nama_ortu'];
    $pekerjaan = $_POST['pekerjaan'];
    $nomor_ortu = $_POST['nomor_ortu'];
    $alamat_ortu = $_POST['alamat_ortu'];


class ppdb{

    public function data_diri($jurusan, $nama, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $nomor_siswa, $email){
        echo "Jurusan : $jurusan <br>";
        echo "Nama Lengkap : $nama <br>";
        echo "Jenis Kelamin : $jenis_kelamin <br>";
        echo "Tempat Lahir : $tempat_lahir <br>";
        echo "Tanggal Lahir : $tanggal_lahir <br>";
        echo "Nomor Yang Bisa DiHubungi : $nomor_siswa <br>";
        echo "Email : $email <br>";
    }
    public function calon_pendaftar($provinsi, $kab_kota, $kecamatan, $desa_kelurahan, $alamat, $kode_pos){
        echo "Provinsi : $provinsi <br>";
        echo "Kab / Kota : $kab_kota <br>";
        echo "Kecamatan : $kecamatan <br>";
        echo "Desa / Kelurahan : $desa_kelurahan <br>";
        echo "Alamat : $alamat <br>";
        echo "Kode Pos : $kode_pos <br>";
    }
    public function asal_sekolah($asal_sekolah, $alamat_sekolah){
        echo "Nama Asal Sekolah : $asal_sekolah <br>";
        echo "Alamat Sekolah : $alamat_sekolah <br>";
    }
    public function data_ortu($pilih_wali, $nama_ortu, $pekerjaan, $nomor_ortu, $alamat_ortu){
        echo "Nama Lengkap Ayah / Ibu / Wali : $nama_ortu ($pilih_wali) <br>";
        echo "Pekerjaan : $pekerjaan <br>";
        echo "Nomor Yang Bisa DiHubungi : $nomor_ortu <br>";
        echo "Alamat Lengkap : $alamat_ortu <br>";
    }
}

$cetak = new ppdb();
echo "<center>";
echo "<h2>Data Diri</h2>";
echo $cetak->data_diri($jurusan, $nama, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $nomor_siswa, $email);
echo "<hr>";
echo "<h2>Alamat Calon Pendaftar</h2>";
echo $cetak->calon_pendaftar($provinsi, $kab_kota, $kecamatan, $desa_kelurahan, $alamat, $kode_pos);
echo "<hr>";
echo "<h2>Data Asal Sekolah</h2>";
echo $cetak->asal_sekolah($asal_sekolah, $alamat_sekolah);
echo "<hr>";
echo "<h2>Data Orang Tua</h2>";
echo $cetak->data_ortu($pilih_wali, $nama_ortu, $pekerjaan, $nomor_ortu, $alamat_ortu);
echo "</center>";
}
?>