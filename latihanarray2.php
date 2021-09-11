<?php 
$artikel = [
    ["penulis" => "Petani Kode", "judul" => "Belajar PHP & MySQL untuk Pemula"],
    ["penulis" => "Dunia Ilkom", "judul" => "Tutorial PHP dari Nol hingga mahir"],
    ["penulis" => "Jago Koding", "judul" => "Membuat Aplikasi Web dengan PHP"],
    ["penulis" => "Programmer", "judul" => "Tutorial Belajar Android"],
    ["penulis" => "Dunia Cyber", "judul" => "Tutorial belajar mikrotik"],
    ["penulis" => "Dunia Ilkom", "judul" => "Tutorial PHP dari Nol hingga mahir"]
];
echo "<h2>ARTIKEL</h2>";
echo $artikel[2]['judul'] . "&nbsp : " .$artikel[2]['penulis'] ."<br>";
echo $artikel[3]['judul'] . "&nbsp : " .$artikel[3]['penulis'];
?>