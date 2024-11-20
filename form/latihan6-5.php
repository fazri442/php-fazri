<?php
//halaman 2
if (isset($_POST['kirim'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit_pendidikan'];
    $tglgaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status = $_POST['status_kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjam = $_POST['pinjaman'];
    $tabung = $_POST['tabungan'];
    $lain = $_POST['lainnya'];

    //jabatan
    if ($jabatan == "Kepala_sekolah") {
        $gaji = 10000000;
    } elseif ($jabatan == "Wakasek") {
        $gaji = 7500000;
    } elseif ($jabatan == "Guru") {
        $gaji = 5000000;
    } elseif ($jabatan == "OB") {
        $gaji = 2500000;
    } else {
        $gaji = "Tidak Memilih";
    }

    //lama kerja
    if ($lama_kerja >= 5) {
        $tunjangan = 1000000;
    } else {
        $tunjangan = 0;
    }

    //status kerja
    if ($status == "tetap") {
        $bonus = 500000;
    } else {
        $bonus = 0;
    }

    //arimatika
    $gajik = $gaji + $tunjangan + $bonus;
    $potong = $bpjs + $pinjam + $tabung + $lain;
    $gajib = $gajik - $potong;
    ?>
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
        <h3>STRUK GAJI</h3>
        <div class="card" style="width: 28rem;">
    <div class="card-header">
        <?php echo $nama ?>
    </div>
        <div class="card-body text-primary">
            <table>
                <tr>
                    <td>No</td>
                    <td>:</td>
                    <td><?php echo $no ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $nama ?></td>
                </tr>
                <tr>
                    <td>Unit Pendidikan</td>
                    <td>:</td>
                    <td><?php echo $unit ?></td>
                </tr>
                <tr>
                    <td>Tanggal Gaji</td>
                    <td>:</td>
                    <td><?php echo $tglgaji ?></td>
                </tr>
            </table>
            <h3>Gaji</h3>
            <table>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><?php echo $jabatan ?></td>
                </tr>
                <tr>
                    <td>Gaji</td>
                    <td>:</td>
                    <td>Rp. <?php echo $gaji ?></td>
                </tr>
                <tr>
                    <td>Lama Kerja</td>
                    <td>:</td>
                    <td><?php echo $lama_kerja ?> Tahun</td>
                </tr>
                <tr>
                    <td>Tunjangan Lama Kerja</td>
                    <td>:</td>
                    <td>Rp. <?php echo $tunjangan ?></td>
                </tr>
                <tr>
                    <td>Status Kerja</td>
                    <td>:</td>
                    <td><?php echo $status ?></td>
                </tr>
                <tr>
                    <td>Bonus</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bonus ?></td>
                </tr>
                <tr>
                    <td>Gaji Kotor</td>
                    <td>:</td>
                    <td>Rp. <?php echo $gajik ?></td>
                </tr>
            </table>
            <h3>POTONGAN</h3>
            <table>
                <tr>
                    <td>BPJS</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bpjs ?></td>
                </tr>
                <tr>
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td>Rp. <?php echo $pinjam ?></td>
                </tr>
                <tr>
                    <td>Tabungan</td>
                    <td>:</td>
                    <td>Rp. <?php echo $tabung ?></td>
                </tr>
                <tr>
                    <td>Lainnya</td>
                    <td>:</td>
                    <td>Rp. <?php echo $lain ?></td>
                </tr>
                <tr>
                    <td>Total Potongan</td>
                    <td>:</td>
                    <td>Rp. <?php echo $potong ?></td>
                </tr>
            </table>
            <h3>TOTAL</h3>
            <table>
                <tr>
                    <td>Gaji Bersih</td>
                    <td>:</td>
                    <td>Rp. <?php echo $gajib ?></td>
                </tr>
            </table>
    </div>
    </div>
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

<?php
}
?>