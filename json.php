<?php 
// $mahasiswa = [
//     'nama' => "Azhar",
//     'Domisili' => "Bandung",
//     'umur' => 16
// ];
// echo json_encode($mahasiswa); //array ke json

// $nilai_ujian = [70,80,90,100];
// echo json_encode($nilai_ujian);

//list JSON Array
$listJSON = '[
    {"nama" : "Azhar"},
    {"nama" : "Azhar Rizky"},
    {"nama" : "Azhar Rizky Aulia"},
    {"nama" : "Rizky Azhar Aulia"}
]';

//konversi dari JSON ke PHP
$list = json_decode($listJSON);

//tampilkan data
foreach($list as  $key => $mahasiswa){
    echo "{$key}. Nama : {$mahasiswa->nama} <br>";
}
?>