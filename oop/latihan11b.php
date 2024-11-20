<?php
if (isset($_POST['proses'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $harian_mtk = $_POST['harian_mtk'];
    $tugas_mtk = $_POST['tugas_mtk'];
    $uts_mtk = $_POST['uts_mtk'];
    $uas_mtk = $_POST['uas_mtk'];
    $harian_indo = $_POST['harian_indo'];
    $tugas_indo = $_POST['tugas_indo'];
    $uts_indo = $_POST['uts_indo'];
    $uas_indo = $_POST['uas_indo'];
    $harian_ingg = $_POST['harian_ingg'];
    $tugas_ingg = $_POST['tugas_ingg'];
    $uts_ingg = $_POST['uts_ingg'];
    $uas_ingg = $_POST['uas_ingg'];
    $harian_pro = $_POST['harian_pro'];
    $tugas_pro = $_POST['tugas_pro'];
    $uts_pro = $_POST['uts_pro'];
    $uas_pro = $_POST['uas_pro'];

    class rata
    {
        public $rata_rata;
        public $grade;

        public function rataRata($mtk1, $mtk2, $mtk3, $mtk4)
        {
            $this->rata_rata = ($mtk1 + $mtk2 + $mtk3 + $mtk4) / 4;
            if ($this->rata_rata >= 75) {
                $this->grade = "Lulus";
            } else {
                $this->grade = "Tidak Lulus";
            }
        }
    }

    $mtk = new rata();
    $mtk->rataRata($harian_mtk, $harian_mtk, $uts_mtk, $uas_mtk);
    $indo = new rata();
    $indo->rataRata($harian_mtk, $harian_indo, $uts_indo, $uas_indo);
    $ingg = new rata();
    $ingg->rataRata($harian_ingg, $harian_ingg, $uts_ingg, $uas_ingg);
    $pro = new rata();
    $pro->rataRata($harian_pro, $harian_pro, $uts_pro, $uas_pro);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h3>Raport Siswa</h3>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama ?></td>
            </tr>
            <tr>
                <td>kelas</td>
                <td>:</td>
                <td><?php echo $kelas ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?php echo $jurusan ?></td>
            </tr>
        </table>
        <table border="1" cellspacing="0">
            <tr>
                <td>Mapel</td>
                <td>Harian</td>
                <td>Tugas</td>
                <td>UTS</td>
                <td>UAS</td>
                <td>Rata-rata</td>
                <td>Grade</td>
            </tr>
            <tr>
                <td>Matematika</td>
                <td><?php echo $harian_mtk ?></td>
                <td><?php echo $tugas_mtk ?></td>
                <td><?php echo $uts_mtk ?></td>
                <td><?php echo $uas_mtk ?></td>
                <td><?php echo $mtk->rata_rata ?></td>
                <td><?php echo $mtk->grade ?></td>
            </tr>
            <tr>
                <td>Indonesia</td>
                <td><?php echo $harian_indo ?></td>
                <td><?php echo $tugas_indo ?></td>
                <td><?php echo $uts_indo ?></td>
                <td><?php echo $uas_indo ?></td>
                <td><?php echo $indo->rata_rata ?></td>
                <td><?php echo $indo->grade ?></td>
            </tr>
            <tr>
                <td>Inggris</td>
                <td><?php echo $harian_ingg ?></td>
                <td><?php echo $tugas_ingg ?></td>
                <td><?php echo $uts_ingg ?></td>
                <td><?php echo $uas_ingg ?></td>
                <td><?php echo $ingg->rata_rata ?></td>
                <td><?php echo $ingg->grade ?></td>
            </tr>
            <tr>
                <td>Produktif</td>
                <td><?php echo $harian_pro ?></td>
                <td><?php echo $tugas_pro ?></td>
                <td><?php echo $uts_pro ?></td>
                <td><?php echo $uas_pro ?></td>
                <td><?php echo $pro->rata_rata ?></td>
                <td><?php echo $pro->grade ?></td>
            </tr>
        </table>
    </center>
</body>
</html>

<?php
}?>