<?php

class ppdb{

    public function data_diri($jurusan, $nama, $JK, $tmp_lahir, $tgl_lahir, $no_hubung, $email){
        echo "Jurusan : $jurusan <br>";
        echo "Nama Lengkap : $nama <br>";
        echo "Jenis Kelamin : $JK <br>";
        echo "Tempat Lahir : $tmp_lahir <br>";
        echo "Tanggal Lahir : $tgl_lahir <br>";
        echo "Nomor Yang Bisa DiHubungi : $no_hubung <br>";
        echo "Email : $email <br>";
    }
    public function calon_pendaftar($provinsi, $kota, $kec, $desa, $alamat, $kode_pos){
        echo "Provinsi : $provinsi <br>";
        echo "Kab / Kota : $kota <br>";
        echo "Kecamatan : $kec <br>";
        echo "Desa / Kelurahan : $desa <br>";
        echo "Alamat : $alamat <br>";
        echo "Kode Pos : $kode_pos <br>";
    }
    public function asal_sekolah($asal_sekolah, $almt_sekolah){
        echo "Nama Asal Sekolah : $asal_sekolah <br>";
        echo "Alamat Sekolah : $almt_sekolah <br>";
    }
    public function data_ortu($nama_ortu, $pekerjaan, $no_ortu, $almt_ortu){
        echo "Nama Lengkap Ayah / Ibu / Wali : $nama_ortu <br>";
        echo "Pekerjaan : $pekerjaan <br>";
        echo "Nomor Yang Bisa DiHubungi : $no_ortu <br>";
        echo "Alamat Lengkap : $almt_ortu <br>";
    }
}

$cetak = new ppdb();
echo "<h2>Data Diri</h2>";
echo $cetak->data_diri("RPL", "Fazri", "Laki-Laki", "Bandung", "04 Mei 2008", "082122324182 ", "fazri@gmail.com");
echo "<hr>";
echo "<h2>Alamat Calon Pendaftar</h2>";
echo $cetak->calon_pendaftar("Jawa Barat", "kab. Bandung", "Baleendah", "Parung Halang", "Belakang Pa Uha", "ppppp");
echo "<hr>";
echo "<h2>Data Asal Sekolah</h2>";
echo $cetak->asal_sekolah("SMP Gravitasi", "Cangkuang Kulon");
echo "<hr>";
echo "<h2>Data Orang Tua</h2>";
echo $cetak->data_ortu("Asep", "Pekerja Swasta", "0897563412", "Parung Halang");


?>