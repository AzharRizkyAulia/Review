<?php 
    if(isset($_POST['simpan'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $indo = $_POST['indo'];
        $inggris = $_POST['inggris'];
        $mtk = $_POST['mtk'];
        $produktif = $_POST['produktif'];
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
        <h2>Data Siswa Kelas XII RPL</h2>
        <table border="1">
            <tr>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Bahasa Indonesia</th>
                <th>Bahasa Inggris</th>
                <th>Matematika</th>
                <th>Produktif</th>
                <th>Total Nilai</th>
                <th>Rata-Rata</th>
                <th>Grade</th>
                <th>Status</th>
            </tr>
            <?php
                for($i=0; $i<count($nama); $i++){
            ?>
            <tr>
                <td><?php echo $nis[$i]; ?></td>
                <td><?php echo $nama[$i]; ?></td>
                <td><?php echo $kelas[$i];  ?></td>
                <td><?php echo $indo[$i]; ?></td>
                <td><?php echo $inggris[$i]; ?></td>
                <td><?php echo $mtk[$i]; ?></td>
                <td><?php echo $produktif[$i];?></td>
                <td><?php 
                $total = $indo[$i] + $inggris[$i] + $mtk[$i] + $produktif[$i];
                echo $total; ?></td>
                <td><?php 
                $rata = ($indo[$i] + $inggris[$i] + $mtk[$i] + $produktif[$i]) / 4;
                echo $rata; ?></td>
                <td><?php
                if($rata >= 90 && $rata <= 100){ 
                    echo "A";
                }else if($rata >= 80 && $rata <= 89){
                    echo "B";
                }else if($rata >= 75 && $rata <= 79){
                    echo "C";
                }else if($rata >= 50 && $rata <= 74){
                    echo "D";
                }else if($rata >= 0 && $rata <= 49){
                    echo "E";
                }
                ?>
                <td><?php
                if($rata >= 75){ 
                    echo "Lulus";
                }else if($rata < 75){
                    echo "Tidak Lulus";
                }
            }?>
            </tr>
        </table>
        <br><a href = "latihanformarray.php">Kembali</a>
    </center>
</body>
</html>