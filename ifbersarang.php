<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action = "" method ="get">
        Masukan Kelas :<input type = "text" name = "kelas"><br>
        Masukan Nilai :<input type = "number" name ="nilai"><br>
        <input type = "submit" name="gas">
    </form>
</body>
</html>

<?php 
if (isset($_GET['gas'])){
$kelas = $_GET['kelas'];
$nilai = $_GET['nilai'];
    if($kelas == "X" || $kelas == "x"){
        if($nilai >= 75 && $nilai <= 100){
            echo "Selamat Anda Lulus";
        }
        elseif($nilai <= 74 && $nilai >= 0){
            echo "Maaf Anda Tidak Lulus";
        }
        else{
            echo "Nilai Tidak Ada";
        }
    }
    elseif($kelas == "XI" || $kelas == "xi"){
        if($nilai >= 78 && $nilai <= 100){
            echo "Selamat Anda Lulus";
        }
        elseif($nilai <= 77 && $nilai >= 0){
            echo "Maaf Anda Tidak Lulus";
        }
        else{
            echo "Nilai Tidak Ada";
        }
    }
    elseif($kelas == "XII" || $kelas == "xii"){
        if($nilai >= 80 && $nilai <= 100){
            echo "Selamat Anda Lulus";
        }
        elseif($nilai <= 79 && $nilai >= 0){
            echo "Maaf Anda Tidak Lulus";
        }
        else{
            echo "Nilai Tidak Ada";
        }
    }
    else{
        echo "Tidak ada kelas";
    }
}
?>