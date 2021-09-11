<?php

//file json yang akan dibaca
$file = "latihan.json";

//mendapatkan file json
$anggota = file_get_contents($file);

//mendecode anggota.json
$data = json_decode($anggota, true);

//membaca/menampilkan data array menggunakan foreach
foreach ($data as $d){
    echo "Nama : " .$d['nama'] . "<br>";
    echo "Domisili : " .$d['domisili'] . "<br>";
    echo "Hobi :";
    echo "<ol>";
    foreach ($d['hobi'] as $h){
    echo "<li>" .$h['jenis']."</li>";
    }
    echo "</ol>";
}

?>
<a href = "latihan.json">Lihat JSON</a>