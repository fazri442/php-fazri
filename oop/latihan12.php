<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan12, Hal. 1</title>
    <style>
        body{
            font-family: 'arial', sans-serif;
            background-color:#f4f7f6;
            margin: 0;
            padding: 20px;
            }
            h2{
                color: #333:
            }
            fieldset{
                max-width: 900px;
                width: 70%;
                padding: 20px;
                margin: 20px auto;
                border: 1px solid #ccc;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            legend {
                font-weight: bold;
                font-size: 18px;
                color: #0056b3;
            }
            table {
                width: 100%;
                border-spacing: 0 10px;
            }
            td {
                padding: 8px;
            }
            input[type="text"],
            input[type="email"],
            input[type="date"],
            input[type="number"],
            select {
                width: 100%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 16px;
            }
            input[type="radio"]{
                margin-right: 10px;
            }
            input[type="submit"]{
                background-color: #0056b3;
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }
            select {
                background-color: #fff;
            }
            .center {
                text-align: center;
            }
    </style>
</head>
<body>
    <center>
        <h1>Formulir Pendaftaran Siswa SMK ASSALAAM</h1>
    <form action="latihan12b.php" method="post">
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
                    <td></td>
                    <td><input type="submit" name="save" value="save"></td>
                </tr>
            </table>
        </fieldset>
    </form><br><br>
    </center>
</body>
</html>
