<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend><b>Gaji Pokok</b></legend>
            <table>
                <tr>
                    <td>Nama Karyawan</td>
                    <td>:</td>
                    <td><input type="text" name="nama_karyawan" id=""></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>
                        <select name="jabatan" id="">
                            <option value="">Pilih Jabatan</option>
                            <option value="Direktur">Direktur</option>
                            <option value="Manager">Manager</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="OB">OB</option>
                        </select>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend><b>Tunjangan</b></legend>
            <table>
                <tr>
                    <td>Pendidikan</td>
                    <td>:</td>
                    <td>
                        <select name="pendidikan" id="">
                            <option value="SMK">SMK</option>
                            <option value="SMA">SMA</option>
                            <option value="SMP">SMP</option>
                            <option value="SD">SD</option>
                        </select>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend><b>Potongan</b></legend>
            <table>
                <tr>
                    <td>Tabungan</td>
                    <td>:</td>
                    <td><input type="number" name="tabungan" id=""></td>
                </tr>
                <tr>
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td><input type="number" name="pinjaman" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="save" value="save"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>

<?php

if(isset($_POST['save'])){
    $nama_karyawan = $_POST['nama_karyawan'];
    $jabatan = $_POST['jabatan'];
    $pendidikan = $_POST['pendidikan'];
    $tabungan = $_POST['tabungan'];
    $pinjaman = $_POST['pinjaman'];


echo "<center><h3>Penggajihan Karyawan</center></h3>";

class gaji_karyawan
{

    public $gaji;
    public $tunjangan;
    public $potongan;
    public $gaji_bersih;

    public function gaji_pokok($nama_karyawan, $jabatan)
    {
        echo "<h4>Gaji Pokok</h4>";
        echo "Nama Karyawan : $nama_karyawan <br>";
        echo "Jabatan : $jabatan<br>";
        if ($jabatan == "Direktur") {
            $this->gaji = 10000000;
        } elseif ($jabatan == "Manager") {
            $this->gaji = 7500000;
        } elseif ($jabatan == "Karyawan") {
            $this->gaji = 5000000;
        } elseif ($jabatan == "OB") {
            $this->gaji = 2500000;
        } else {
            $this->gaji = 0;
        }
        echo "Gaji Pokok : RP." . number_format($this->gaji) . "<br>";
    }
    public function tunjangan($pendidikan)
    {
        echo "<h4>Tunjangan</h4>";
        echo "Pendidikan : $pendidikan <br>";
        if ($pendidikan == "S1") {
            $this->tunjangan = 1000000;
        } elseif ($pendidikan == "SMA") {
            $this->tunjangan = 750000;
        } elseif ($pendidikan == "SMK") {
            $this->tunjangan = 750000;
        } elseif ($pendidikan == "SMP") {
            $this->tunjangan = 500000;
        } elseif ($pendidikan == "SD") {
            $$this->tunjangan = 250000;
        } else {
            $$this->tunjangan = 0;
        }
        echo "Tunjangan Pendidikan : RP." . number_format($this->tunjangan) . "<br>";
    }
    public function potongan($tabungan, $pinjaman)
    {
        echo "<h4>Potongan</h4>";
        echo "Tabungan : RP. " . number_format($tabungan) . "<br>";
        echo "Pinjaman : RP. " . number_format($pinjaman) . "<br>";
        $this->potongan = $tabungan + $pinjaman;
        echo "Total Potongan : RP." . number_format($this->potongan);
    }
    public function total_gaji()
    {
        echo "<h4>Total Gaji Bersih</h4>";
        $this->gaji_bersih = $this->gaji + $this->tunjangan - $this->potongan;
        echo "Total Gaji Bersih : RP." . number_format($this->gaji_bersih);
    }
}

$cetak = new gaji_karyawan();

echo $cetak->gaji_pokok($nama_karyawan, $jabatan);
echo "<hr>";
echo $cetak->tunjangan($pendidikan);
echo "<hr>";
echo $cetak->potongan($tabungan, $pinjaman);
echo "<hr>";
echo $cetak->total_gaji();
echo "<hr>";
}
