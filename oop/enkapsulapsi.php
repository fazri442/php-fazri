<?php

class contoh
{

    public $nama = "fazri";
    public function perkenalan()
    {
        echo "assalaamualaikum";
    }
}

$cetak = new contoh();
echo $cetak->perkenalan();
echo "<br>";
echo $cetak->nama;
