<?php

if (isset($_POST['save'])) {
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

    class ppdb
    {

        public function data_diri($jurusan, $nama, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $nomor_siswa, $email)
        {
            echo "Jurusan : $jurusan <br>";
            echo "Nama Lengkap : $nama <br>";
            echo "Jenis Kelamin : $jenis_kelamin <br>";
            echo "Tempat Lahir : $tempat_lahir <br>";
            echo "Tanggal Lahir : $tanggal_lahir <br>";
            echo "Nomor Yang Bisa DiHubungi : $nomor_siswa <br>";
            echo "Email : $email <br>";
        }
        public function calon_pendaftar($provinsi, $kab_kota, $kecamatan, $desa_kelurahan, $alamat, $kode_pos)
        {
            echo "Provinsi : $provinsi <br>";
            echo "Kab / Kota : $kab_kota <br>";
            echo "Kecamatan : $kecamatan <br>";
            echo "Desa / Kelurahan : $desa_kelurahan <br>";
            echo "Alamat : $alamat <br>";
            echo "Kode Pos : $kode_pos <br>";
        }
        public function asal_sekolah($asal_sekolah, $alamat_sekolah)
        {
            echo "Nama Asal Sekolah : $asal_sekolah <br>";
            echo "Alamat Sekolah : $alamat_sekolah <br>";
        }
        public function data_ortu($pilih_wali, $nama_ortu, $pekerjaan, $nomor_ortu, $alamat_ortu)
        {
            echo "Nama Lengkap Ayah / Ibu / Wali : $nama_ortu ($pilih_wali) <br>";
            echo "Pekerjaan : $pekerjaan <br>";
            echo "Nomor Yang Bisa DiHubungi : $nomor_ortu <br>";
            echo "Alamat Lengkap : $alamat_ortu <br>";
        }
    }

    $cetak = new ppdb();
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan12, Hal. Dua</title>
        <style>
        body {
            font-family: 'arial', sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #007BFF;
            padding-bottom: 10px;
        }
        table {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        tr:nth-child(even){
            background-color: #f9f9f9;
        }
        tr:hover{
            background-color: #f1f1f1;
        }
        td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }
        .label{
            font-weight: bold;
            color: #007BFF;
        }
        .value {
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #666;
        }
    </style>
    </head>
    <body>
        <center>
            <fieldset>
            <table>
                <tr>
                    <th>Data Diri</th>
                </tr>
                <tr>
                    <td><?php echo $cetak->data_diri($jurusan, $nama, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $nomor_siswa, $email); ?> </td>
                </tr>
                </table>
            </fieldset>
            <br>
            <fieldset>
                <table>
                <tr>
                    <th>Alamat Calon Pendaftatr</th>
                </tr>
                <tr>
                    <td><?php echo $cetak->calon_pendaftar($provinsi, $kab_kota, $kecamatan, $desa_kelurahan, $alamat, $kode_pos); ?></td>
                </tr>
                </table>
            </fieldset>
            <br>
            <fieldset>
                <table>
                <tr>
                    <th>Data Asal Sekolah</th>
                </tr>
                <tr>
                    <td><?php echo $cetak->asal_sekolah($asal_sekolah, $alamat_sekolah); ?></td>
                </tr>
                </table>
            </fieldset>
            <br>
            <fieldset>
                <table>
                <tr>
                    <th>Data Orang Tua</th>
                </tr>
                <tr>
                    <td><?php echo $cetak->data_ortu($pilih_wali, $nama_ortu, $pekerjaan, $nomor_ortu, $alamat_ortu); ?></td>
                </tr>
            </table>
            </fieldset>
        </center>
    </body>
    </html>
<?php
}?>