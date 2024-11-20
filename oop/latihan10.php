<?php

echo "<center><h3>Penggajihan Karyawan</center></h3>";

class gaji_karyawan{


    public $gaji;
    public $tunjangan;
    public $potongan;
    public $gaji_bersih;


    public function gaji_pokok($nama_karyawan, $jabatan){
        echo "<h4>Gaji Pokok</h4>";
        echo "Nama Karyawan : $nama_karyawan <br>";
        echo "Jabatan : $jabatan<br>";
        if ($jabatan == "Direktur"){
            $this->gaji = 10000000;
        } elseif ($jabatan == "Manager"){
            $this->gaji = 7500000 ;
        } elseif ($jabatan == "Karyawan"){
            $this->gaji = 5000000;
        } elseif ($jabatan == "OB"){
            $this->gaji = 2500000 ;
        } else {
            $this->gaji = 0 ;
        }
        echo "Gaji Pokok : RP.". number_format($this->gaji) ."<br>";
    }
    public function tunjangan($pendidikan){
        echo "<h4>Tunjangan</h4>";
        echo "Pendidikan : $pendidikan <br>";
        if ($pendidikan == "S1"){
            $this->tunjangan = 1000000;
        } elseif ($pendidikan == "SMA"){
            $this->tunjangan = 750000;
        }elseif ($pendidikan == "SMK"){
            $this->tunjangan = 750000;
        }elseif ($pendidikan == "SMP"){
            $this->tunjangan = 500000;
        } elseif ($pendidikan == "SD"){
            $$this->tunjangan = 250000;
        } else {
            $$this->tunjangan = 0;
        }
        echo "Tunjangan Pendidikan : RP.". number_format($this->tunjangan) . "<br>";
    }
    public function potongan($tabungan, $pinjaman){
        echo "<h4>Potongan</h4>";
        echo "Tabungan : RP. " . number_format($tabungan) . "<br>";
        echo "Pinjaman : RP. " . number_format($pinjaman) . "<br>";
        $this->potongan = $tabungan + $pinjaman;
        echo "Total Potongan : RP." .number_format($this->potongan);
    }
    public function total_gaji(){
        echo "<h4>Total Gaji Bersih</h4>";
        $this->gaji_bersih = $this->gaji + $this->tunjangan - $this->potongan;
        echo "Total Gaji Bersih : RP." .number_format($this->gaji_bersih);
    }
}

$cetak = new gaji_karyawan();

echo $cetak->gaji_pokok("Fazri","Direktur");
echo "<hr>";
echo $cetak->tunjangan("SMA");
echo "<hr>";
echo $cetak->potongan(100000, 100000);
echo "<hr>";
echo $cetak->total_gaji();
echo "<hr>";
