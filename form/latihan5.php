<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
  </head>
  <body>
    <center>
        <img src="logo-yayasan.jpg" alt="" width="200px" height="150px">
        <h3>PENGGAJIHAN</h3>
        <h3>GURU/KARYAWAN YAYASAN ASSAALAAM</h3>
        <form action="latihan6-5.php" method="post">
        <div class="card" style="width : 28rem;">
        <div class="card-header">Data Penggajihan</div>
            <div class="card-body">
                <table>
        <tr>
            <td>No</td>
        </tr>
        <tr>
            <td><input type="number" name="no" value="" placeholder="No"></td>
        </tr>
        <tr>
            <td>Nama</td>
        </tr>
        <tr>
            <td><input type="text" name="nama" value="" placeholder="Nama"></td>
        </tr>
        <tr>
            <td>Unit Pendidikan</td>
        </tr>
        <tr>
            <td>
                <select name="unit_pendidikan">
                    <option value="">Pilih Unit Pendidikan</option>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMK">SMK</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal Gaji</td>
        </tr>
        <tr>
            <td><input type="date" name="tanggal_gaji"></td>
        </tr>
        <tr>
            <td><b>GAJI</b></td>
            <td><b>POTONGAN</b></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>BPJS</td>
        </tr>
        <tr>
            <td>
                <select name="jabatan" id="">
                    <option value="">Pilih Jabatan</option>
                    <option value="Kepala_sekolah">Kepala Sekolah</option>
                    <option value="Wakasek">Wakaswek</option>
                    <option value="Guru">Guru</option>
                    <option value="OB">OB</option>
                </select>
            </td>
            <td><input type="number" name="bpjs" id=""></td>
        </tr>
        <tr>
            <td>Lama Kerja</td>
            <td>Pinjaman</td>
        </tr>
        <tr>
            <td><input type="number" name="lama_kerja" placeholder="Lama Kerja"></td>
            <td><input type="number" name="pinjaman" placeholder="Pinjaman"></td>
        </tr>
        <tr>
            <td>Status Kerja</td>
            <td>Tabungan</td>
        </tr>
        <tr>
            <td>
                <select name="status_kerja" id="">
                    <option value="">Piih Status Kerja</option>
                    <option value="tetap">Tetap</option>
                    <option value="kontrak">Kontrak</option>
                </select>
            </td>
            <td><input type="number" name="tabungan" placeholder="Tabungan"></td>
        </tr>
        <tr>
            <td></td>
            <td>Lainnya</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="text" name="lainnya" placeholder="Lainnya"></td>
        </tr>
        <tr>
            <td><button type="submit" name="kirim" class="btn btn-primary">Proses</button></td>
        </tr>
    </table>
            </div>
        </div>
        </form>
    </center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
