<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 5</title>
</head>
<body>
<form action = "" method = "POST">
        <table>
            <tr>
            <td>Masukan Nilai</td>
            <td>:</td>
            <td><input type = "text" name = "bintang"></td>
            </tr>

            <tr>
            <td></td>
            <td></td>
            <td><input type = "submit" name = "mulai" value = "Mulai"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if(isset($_POST["mulai"])){
    $bintang= @$_POST['bintang'];

    //atas
    for($a=1; $a<=$bintang; $a++){
        for($b=$bintang; $b>=$a; $b-=1){
            echo "&nbsp";
        }
        for($c=1; $c<=$a; $c++){
            echo "*";
        }
        echo "<br>";
        }
        echo "<br>";
    //bawah
    for($a=1; $a<=$bintang; $a++){
            for($b=1; $b<=$a; $b++){
                echo "&nbsp";
            }
            for($c=$bintang; $c>=$a; $c-=1){
                echo "*";
            }
            echo "<br>";
            }
    }
?>