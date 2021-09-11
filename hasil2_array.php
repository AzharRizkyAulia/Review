<?php 
if(isset($_POST['cetak'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $nilai = $_POST['nilai'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil</title>
</head>
<body>
<center>
    <h2>Form Cetak Nilai Siswa<br>
    SMK ASSALAAM BANDUNG<br>
    Tahun 2021/2022<br></h2>

    <table border="1" cellpadding="2">
        <?php
        for ($i = 0; $i < count($nama); $i++){
        ?>
        <tr>
            <th colspan="4" align="left">
            Nama : 
            <?php echo $nama[$i]; ?><br>
            Nis :
            <?php echo $nis[$i]; ?>
            </th>
        </tr>

        <tr>
            <th>No</th>
            <th>Mata Pelajaran</th>
            <th>Nilai</th>
        </tr>

        <?php 
        if ($nilai[$i] > 85 && $nilai[$i] <= 100){
            $grade[$i] = 'A';
            $bobot[$i] = 4;
        }else if ($nilai[$i] > 70 && $nilai[$i] <= 85){
            $grade[$i] = 'B';
            $bobot[$i] = 3;
        }
        else if ($nilai[$i] > 60 && $nilai[$i] <= 70){
            $grade[$i] = 'C';
            $bobot[$i] = 2;
        }
        else if ($nilai[$i] > 40 && $nilai[$i] <= 60){
            $grade[$i] = 'D';
            $bobot[$i] = 1;
        }
        else if ($nilai[$i] <= 40 && $nilai[$i] >= 0){
            $grade[$i] = 'E';
            $bobot[$i] = 0;
        }
        $rata=array_sum($bobot)/10;
        ?>
        
        <tr>
            <td>1</td>
            <td align="left">Pendidikan Agama Islam</td>
            <td>
                <?php echo $grade[$i];?>
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td align="left">PPKN</td>
            <td>
                <?php echo $grade[$i];?>
            </td>
        </tr>

        <tr>
            <td>3</td>
            <td align="left">Bahasa Indonesia</td>
            <td>
                <?php echo $grade[$i];?>
            </td>
        </tr>

        <tr>
            <td>4</td>
            <td align="left">Matematika</td>
            <td>
                <?php echo $grade[$i];?>    
            </td>
        </tr>

        <tr>
            <td>5</td>
            <td align="left">Bahasa Inggris</td>
            <td>
                <?php echo $grade[$i];?>
            </td>
        </tr>

        <tr>
            <td>6</td>
            <td align="left">Produk Kreatif dan Kewirausahaan</td>
            <td>
                <?php echo $grade[$i];?>
            </td>
        </tr>

        <tr>
            <td>7</td>
            <td align="left">Al-Quran</td>
            <td>
                <?php echo $grade[$i];?>
            </td>
        </tr>

        <tr>
            <td>8</td>
            <td align="left">Bimbingan Konseling</td>
            <td>
                <?php echo $grade[$i];?>
            </td>
        </tr>

        <tr>
            <td>9</td>
            <td align="left">Produktif RPL</td>
            <td>
                <?php echo $grade[$i];?>
            </td>
        </tr>

        <tr>
            <td>10</td>
            <td align="left">Produktif TKJ</td>
            <td>
                <?php echo $grade[$i];?>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                 <?php
                echo $rata;
                }?>
            </td>
            <td></td>
        </tr>

    </table>
    </center>
</body>
</html>