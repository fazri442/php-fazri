<?php

$novel = '[
    {
        "no": "1001",
        "judul":"Dilan 1991",
        "genre":"Romance",
        "penulis":"Pidi Baiq",
        "penerbit":"Airlangga",
        "tahun_rilis":"2014"
    },
    {
        "no": "1002",
        "judul":"Tenggelamnya Kapal Van Der Wick",
        "genre":"Elegi",
        "penulis":"Hamka",
        "penerbit":"PTS Publishing House",
        "tahun_rilis":"2013"
    },
    {
        "no": "1003",
        "judul":"Bumi Manusia",
        "genre":"Fiksi",
        "penulis":"Pramoedya Ananta Toer",
        "penerbit":"Hasta Mitra",
        "tahun_rilis":"1980"
    },
    {
        "no": "1004",
        "judul":"Bangku Kosong",
        "genre":"Horor",
        "penulis":"Ruwi Meita",
        "penerbit":"Gagas Media",
        "tahun_rilis":"2006"
    },
    {
        "no": "1005",
        "judul":"sibedog Panjnag",
        "genre":"Fiksi",
        "penulis":"Ki umbara",
        "penerbit":"Kiblat Buku Utama",
        "tahun_rilis":"2011"
    },
    {
        "no": "1006",
        "judul":"Laskar Pelangi",
        "genre":"Realisme Sosial",
        "penulis":"Andrea Hirata",
        "penerbit":"Bentang Pustaka",
        "tahun_rilis":"2005"
    },
    {
        "no": "1007",
        "judul":"Endesor",
        "genre":"Roman",
        "penulis":"Andrea Hirata",
        "penerbit":"Bentang Pustaka",
        "tahun_rilis":"2007"
    },
    {
        "no": "1008",
        "judul":"Supernova : petir",
        "genre":"Fiksi Ilmiah",
        "penulis":"Dee Lestari",
        "penerbit":"Bentang Pustaka",
        "tahun_rilis":"2007"
    },
    {
        "no": "1009",
        "judul":"Perahu Kertas",
        "genre":"Romance",
        "penulis":"Dee Lestari",
        "penerbit":"Bentang Pustaka",
        "tahun_rilis":"2009"
    },
    {
        "no": "1010",
        "judul":"Layar Terkembang",
        "genre":"Roman",
        "penulis":"Sutan Takdir Alisjahbana",
        "penerbit":"Balai Pustaka",
        "tahun_rilis":"1973"
    },
    {
        "no": "1011",
        "judul":"Gadis Pantai",
        "genre":"Fiksi",
        "penulis":"Pramoedya Ananta Toer",
        "penerbit":"KPG / Lentera",
        "tahun_rilis":"2006"
    },
    {
        "no": "1012",
        "judul":"Cantik itu luka",
        "genre":"Fiksi",
        "penulis":"Eka Kurnia",
        "penerbit":"Penerbit Jendela",
        "tahun_rilis":"2002"
    },
    {
        "no": "1013",
        "judul":"Supernova : Akar",
        "genre":"Fiksi Ilmiah",
        "penulis":"Dee Lestari",
        "penerbit":"Bentang Pustaka",
        "tahun_rilis":"2014"
    },
    {
        "no": "1014",
        "judul":"Negeri 5 Menara",
        "genre":"Fiksi",
        "penulis":"Ahmad Fuadi",
        "penerbit":"Gramedia",
        "tahun_rilis":"2009"
    },
    {
        "no": "1015",
        "judul":"Ayat-Ayat Cinta",
        "genre":"Romance",
        "penulis":"Habiburrahman el-shizary",
        "penerbit":"Basmala dan Republika",
        "tahun_rilis":"2004"
    },
    {
        "no": "1016",
        "judul":"Robohnya Surau Kami",
        "genre":"Sedih",
        "penulis":"A.A Navis",
        "penerbit":"Gramedia",
        "tahun_rilis":"1956"
    },
    {
        "no": "1017",
        "judul":"Negeri Van Oranje",
        "genre":"Fiksi",
        "penulis":"Wahyuningrat",
        "penerbit":"Bentang Pustaka",
        "tahun_rilis":"2015"
    },
    {
        "no": "1018",
        "judul":"Pulang",
        "genre":"Fiksi sejarah dan politik",
        "penulis":"Leila S. Chudori",
        "penerbit":"Gramedia",
        "tahun_rilis":"2012"
    },
    {
        "no": "1019",
        "judul":"Sepatu Dahlan",
        "genre":"Fiksi",
        "penulis":"Khrisna pabichara",
        "penerbit":"Noura Books",
        "tahun_rilis":"2012"
    },
    {
        "no": "1020",
        "judul":"Lelaki Harimau",
        "genre":"fiksi",
        "penulis":"Eka Kurniawan",
        "penerbit":"Gramedia",
        "tahun_rilis":"2015"
    }
]';

$list = json_decode($novel);
// foreach ($list as $jenis) {
//     echo "No : {$jenis->no} <br>";
//     echo "Judul : {$jenis->judul} <br>";
//     echo "Genre : {$jenis->genre} <br>";
//     echo "Penulis : {$jenis->penulis} <br>";
//     echo "Penerbit : {$jenis->penerbit} <br>";
//     echo "Tahun Rilis : {$jenis->tahun_rilis} <br>";
//     echo "<hr>";
// }

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
    <h2>Kumpulan Novel</h2>
    <table border="1" cellspacing="1">
        <tr>
            <td>No</td>
            <td>Judul</td>
            <td>Genre</td>
            <td>Penulis</td>
            <td>Penerbit</td>
            <td>Tahun Rilis</td>
        </tr>
        <?php foreach ($list as $jenis) {?>
        <tr>
            <td><?php echo "{$jenis->no}"; ?></td>
            <td><?php echo "{$jenis->judul}"; ?></td>
            <td><?php echo "{$jenis->genre}"; ?></td>
            <td><?php echo "{$jenis->penulis}"; ?></td>
            <td><?php echo "{$jenis->penerbit}"; ?></td>
            <td><?php echo "{$jenis->tahun_rilis}"; ?></td>
        </tr>
        <?php }?>
    </table>
    </center>
</body>
</html>
