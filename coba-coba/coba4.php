<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Mencari Luas Dan Keliling</h1></center>
    <form action="" method="post">
        <fieldset>
            <legend><b>Persegi</b></legend>
            <table>
                <tr>
                    <td>Mencari Luas Persegi</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sisinya</td>
                    <td>:</td>
                    <td><input type="number" name="luas_persegi" id=""></td>
                </tr>
                <tr>
                    <td>Mencari Keliling Persegi</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sisinya</td>
                    <td>:</td>
                    <td><input type="number" name="keliling_persegi" id=""></td>
                </tr>
            </table>
            <center><input type="submit" value="Save" name="persegi"></center>
        </fieldset>
        <fieldset>
            <legend><b>Lingkaran</b></legend>
            <table>
                <tr>
                    <td>Mencari Luas Lingkaran</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Masukkan Jari-jarinya</td>
                    <td>:</td>
                    <td><input type="number" name="luas_lingkaran" id=""></td>
                </tr>
                <tr>
                    <td>Mencari Keliling Lingkaran</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Masukkan Jari-jarinya</td>
                    <td>:</td>
                    <td><input type="number" name="keliling_lingkaranj" id=""></td>
                </tr>
                <tr>
                    <td>Masukkan Diameternya</td>
                    <td>:</td>
                    <td><input type="number" name="keliling_lingkarand" id=""></td>
                </tr>
            </table>
            <center><input type="submit" value="Save" name="lingkaran"></center>
        </fieldset>
        <fieldset>
            <legend><b>Segitiga</b></legend>
            <table>
                <tr>
                    <td>Mencari Luas Segitiga</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Masukkan Alasnya</td>
                    <td>:</td>
                    <td><input type="number" name="luas_segitiga" id=""></td>
                </tr>
                <tr>
                    <td>Masukkan Tingginya</td>
                    <td>:</td>
                    <td><input type="number" name="luast_segitiga" id=""></td>
                </tr>
                <tr>
                    <td>Mencari Keliling Segitiga</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Masukkan Sisinya</td>
                    <td>:</td>
                    <td><input type="number" name="keliling_segitiga" id=""></td>
                </tr>
            </table>
            <center><input type="submit" value="Save" name="segitiga"></center>
        </fieldset>
        <fieldset>
            <legend><b>Persegi Panjang</b></legend>
            <table>
            <tr>
                <td>Mencari Luas Persegi Panjang</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Masukkan Panjangnya</td>
                <td>:</td>
                <td><input type="number" name="luas_persegiPanjang" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Lebarnya</td>
                <td>:</td>
                <td><input type="number" name="luasl_persegiPanjang" id=""></td>
            </tr>
            <tr>
                <td>Mencari Keliling Persegi Panjang</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Masukkan Panjangnya</td>
                <td>:</td>
                <td><input type="number" name="keliling_persegiPanjang" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Lebarnya</td>
                <td>:</td>
                <td><input type="number" name="kelilingl_persegiPanjang" id=""></td>
            </tr>
            </table>
            <center><input type="submit" value="Save" name="persegipanjang"></center>
        </fieldset>
        <center><input type="submit" value="Kirim" name="register"></center>
    </form>
</body>
</html>

<?php
if (isset($_POST['persegi'])) {
    $sisiL = $_POST['luas_persegi'];
    $sisiK = $_POST['keliling_persegi'];

    class persegi
    {
        public $luas_persegi;
        public $keliling_persegi;

        public function luas_persegi($luas)
        {
            echo "<h2>Mencari Luas Persegi</h2>";
            echo "Sisinya Adalah : $luas <br>";
            $this->luas_persegi = $luas * $luas;
            echo "Luasnya = $this->luas_persegi <br>";
        }
        public function keliling_persegi($keliling)
        {
            echo "<h2>Mencari Keliling Persegi</h2>";
            echo "Sisinya Adalah : $keliling <br>";
            $this->keliling_persegi = $keliling * $keliling * $keliling * $keliling;
            echo "Luasnya = $this->keliling_persegi <br>";
        }
    }

    $cetak = new persegi();
    echo $cetak->luas_persegi($sisiL);
    $keliling = new persegi();
    echo $keliling->keliling_persegi($sisiK);

} elseif (isset($_POST['lingkaran'])) {
    $jariL = $_POST['luas_lingkaran'];
    $jarij = $_POST['keliling_lingkaranj'];
    $jarid = $_POST['keliling_lingkarand'];

    class lingkaran
    {
        public $luas_lingkaran;
        public $keliling_lingkaran;

        public function luas_lingkaran($jari)
        {
            echo "<h2>Mencari Luas Lingkaran</h2>";
            echo "Jari-jarinya Adalah : $jari <br>";
            $this->luas_lingkaran = 3.14 * $jari * $jari;
            echo "Hasilnya Adalah : $this->luas_lingkaran <br>";
        }
        public function keliling_lingkaran($jarijari, $jarijar)
        {
            echo "<h2>Mencari Keliling Lingkaran</h2>";
            if ($jarijar == 0) {
                echo "Diameternya Adalah : $jarijar <br>";
                $this->keliling_lingkaran = 3.14 * $jarijar;
            } else {
                echo "Jari-Jarinya Adalah : $jarijari <br>";
                $this->keliling_lingkaran = 3.14 * 2 * $jarijari;
            }
            echo "Hasilnya Adalah : $this->keliling_lingkaran <br>";
        }
    }

    $cetak = new lingkaran();
    echo $cetak->luas_lingkaran($jariL);
    $keliling = new lingkaran();
    echo $keliling->keliling_lingkaran($jarij, $jarid);

} elseif (isset($_POST['segitiga'])) {
    $luas = $_POST['luas_segitiga'];
    $tinggi = $_POST['luast_segitiga'];
    $sisi = $_POST['keliling_segitiga'];

    class segitiga
    {

        public $luas_segitiga;
        public $keliling_segitiga;

        public function luas_segitiga($alas, $tinggi)
        {
            echo "<h2>Mencari Luas Segitiga</h2>";
            echo "Alasnya Adalah : $alas <br>";
            echo "Tingginya : $tinggi <br>";
            $this->luas_segitiga = $alas * $tinggi / 2;
            echo "Hasilnya Adalah : $this->luas_segitiga <br>";
        }
        public function keliling_segitiga($sisiL)
        {
            echo "<h2>Mencari Keliling Segitiga</h2>";
            echo "Sisinya Adalah : $sisiL <br>";
            $this->keliling_segitiga = $sisiL + $sisiL + $sisiL;
            echo "Hasilnya Adalah : $this->keliling_segitiga <br>";
        }
    }

    $cetak = new segitiga();
    echo $cetak->luas_segitiga($luas, $tinggi);
    $keliling = new segitiga();
    echo $keliling->keliling_segitiga($sisi);
} elseif (isset($_POST['persegipanjang'])) {
    $panjang = $_POST['luas_persegiPanjang'];
    $lebar = $_POST['luasl_persegiPanjang'];
    $panjangK = $_POST['keliling_persegiPanjang'];
    $lebarK = $_POST['kelilingl_persegiPanjang'];

    class persegiPanjang
    {

        public $luas_persegiPanjang;
        public $keliling_persegiPanjang;

        public function luas_persegiPanjang($panjang, $lebar)
        {
            echo "<h2>Mencari Luas Persegi Panjang</h2>";
            echo "Panjangnya Adalah : $panjang <br>";
            echo "Lebarnya Adalah : $lebar <br>";
            $this->luas_persegiPanjang = $panjang * $lebar;
            echo "Hasilnya Adalah : $this->luas_persegiPanjang <br>";
        }
        public function keliling_persegiPanjang($panjang, $lebar)
        {
            echo "<h2>Mencari Keliling Persegi Panjang</h2>";
            echo "Panjangnya Adalah : $panjang <br>";
            echo "Lebarnya Adalah : $lebar <br>";
            $this->keliling_persegiPanjang = ($panjang + $lebar) * 2;
            echo "Hasilnya Adalah : $this->keliling_persegiPanjang <br>";
        }
    }

    $cetak = new persegiPanjang();
    echo $cetak->luas_persegiPanjang($panjang, $lebar);
    $keliling = new persegiPanjang();
    echo $keliling->keliling_persegiPanjang($panjangK, $lebarK);

} elseif (isset($_POST['register'])) {
    $panjang = $_POST['luas_persegiPanjang'];
    $lebar = $_POST['luasl_persegiPanjang'];
    $panjangK = $_POST['keliling_persegiPanjang'];
    $lebarK = $_POST['kelilingl_persegiPanjang'];
    $luas = $_POST['luas_segitiga'];
    $tinggi = $_POST['luast_segitiga'];
    $sisi = $_POST['keliling_segitiga'];
    $jariL = $_POST['luas_lingkaran'];
    $jarij = $_POST['keliling_lingkaranj'];
    $jarid = $_POST['keliling_lingkarand'];
    $sisiL = $_POST['luas_persegi'];
    $sisiK = $_POST['keliling_persegi'];

    class bangun_datar
    {
        public $luas_persegi;
        public $keliling_persegi;
        public $luas_lingkaran;
        public $keliling_lingkaran;
        public $luas_segitiga;
        public $keliling_segitiga;
        public $luas_persegiPanjang;
        public $keliling_persegiPanjang;
    }
    class persegi extends bangun_datar
    {
        public function luas_persegi($luas)
        {
            echo "<h2>Mencari Luas Persegi</h2>";
            echo "Sisinya Adalah : $luas <br>";
            $this->luas_persegi = $luas * $luas;
            echo "Luasnya = $this->luas_persegi <br>";
        }
        public function keliling_persegi($keliling)
        {
            echo "<h2>Mencari Keliling Persegi</h2>";
            echo "Sisinya Adalah : $keliling <br>";
            $this->keliling_persegi = $keliling * $keliling * $keliling * $keliling;
            echo "Luasnya = $this->keliling_persegi <br>";
        }
    }
    class lingkaran extends bangun_datar
    {
        public function luas_lingkaran($jari)
        {
            echo "<h2>Mencari Luas Lingkaran</h2>";
            echo "Jari-jarinya Adalah : $jari <br>";
            $this->luas_lingkaran = 3.14 * $jari * $jari;
            echo "Hasilnya Adalah : $this->luas_lingkaran <br>";
        }
        public function keliling_lingkaran($jarijari, $jarijar)
        {
            echo "<h2>Mencari Keliling Lingkaran</h2>";
            if ($jarijar == 0) {
                echo "Diameternya Adalah : $jarijar <br>";
                $this->keliling_lingkaran = 3.14 * $jarijar;
            } else {
                echo "Jari-Jarinya Adalah : $jarijari <br>";
                $this->keliling_lingkaran = 3.14 * 2 * $jarijari;
            }
            echo "Hasilnya Adalah : $this->keliling_lingkaran <br>";
        }
    }
    class segitiga extends bangun_datar
    {
        public function luas_segitiga($alas, $tinggi)
        {
            echo "<h2>Mencari Luas Segitiga</h2>";
            echo "Alasnya Adalah : $alas <br>";
            echo "Tingginya : $tinggi <br>";
            $this->luas_segitiga = $alas * $tinggi / 2;
            echo "Hasilnya Adalah : $this->luas_segitiga <br>";
        }
        public function keliling_segitiga($sisiL)
        {
            echo "<h2>Mencari Keliling Segitiga</h2>";
            echo "Sisinya Adalah : $sisiL <br>";
            $this->keliling_segitiga = $sisiL + $sisiL + $sisiL;
            echo "Hasilnya Adalah : $this->keliling_segitiga <br>";
        }
    }
    class persegi_panjang extends bangun_datar
    {
        public function luas_persegiPanjang($panjang, $lebar)
        {
            echo "<h2>Mencari Luas Persegi Panjang</h2>";
            echo "Panjangnya Adalah : $panjang <br>";
            echo "Lebarnya Adalah : $lebar <br>";
            $this->luas_persegiPanjang = $panjang * $lebar;
            echo "Hasilnya Adalah : $this->luas_persegiPanjang <br>";
        }
        public function keliling_persegiPanjang($panjang, $lebar)
        {
            echo "<h2>Mencari Keliling Persegi Panjang</h2>";
            echo "Panjangnya Adalah : $panjang <br>";
            echo "Lebarnya Adalah : $lebar <br>";
            $this->keliling_persegiPanjang = ($panjang + $lebar) * 2;
            echo "Hasilnya Adalah : $this->keliling_persegiPanjang <br>";
        }
    }

    $cetak = new persegi();
    echo $cetak->luas_persegi($sisiL);
    echo $cetak->keliling_persegi($sisiK);
    echo "<hr>";
    $cetak2 = new lingkaran();
    echo $cetak2->luas_lingkaran($jariL);
    echo $cetak2->keliling_lingkaran($jarij, $jarid);
    echo "<hr>";
    $cetak3 = new segitiga();
    echo $cetak3->luas_segitiga($luas, $tinggi);
    echo $cetak3->keliling_segitiga($sisi);
    echo "<hr>";
    $cetak4 = new persegi_panjang();
    echo $cetak4->luas_persegiPanjang($panjang, $lebar);
    echo $cetak4->keliling_persegiPanjang($panjangK, $lebarK);
    echo "<hr>";
}