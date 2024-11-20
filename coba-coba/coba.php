<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Mencari Luas Persegi</h3>
    <p>Rumusnya Adalah Sisi X Sisi</p>
    <form action="" method="post">
        <table>
            <tr>
                <td>Masukkan Sisinya</td>
                <td>:</td>
                <td><input type="number" name="sisi" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="kirim" name="save"></td>
            </tr>
        </table>
    </form>
    <br><br>
</body>
</html>


<?php
if (isset($_POST['save'])) {
    $sisi = $_POST['sisi'];

    echo "<b> Mencari Luas Persegi </b><br>";
    function luas_persegi($sisi)
    {
        echo "Sisinya Adalah : $sisi <br>";
        $hasil = $sisi * $sisi;
        echo "Luasnya = $hasil <br>";
    }
    luas_persegi($sisi);
}
?>
