<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch</title>
</head>
<body>
<form action = "" method = "POST">
            <table>
                <tr>
                    <td>Masukan Angka</td>
                    <td>:</td>
                    <td><input type = "text" name="angka"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type = "submit" value = "Kirim" name = "simpan"></td>
                </tr>
            <table>
</form>
</body>
</html>

<?php 
    if(isset($_POST["simpan"])){
        $angka= @$_POST['angka'];

        for($i = 1; $i <= $angka; $i++){
            for($a = 1; $a <= $i; $a++){
                echo "wkwk $a <br>";
            }
            echo "<br>";
        }
        
    }
?>