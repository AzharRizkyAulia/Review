<center>
<h2>Nilai Ujian Kelas 12 RPL</h2>
<table border=1 align="center">
<tr>
    <th>Nama</th>
    <th>Matematika</th>
    <th>Bahasa Inggris</th>
    <th>Bahasa Indonesia</th>
    <th>Kejuruan</th>
    <th>Rata-Rata</th>
    <th>Status</th>
    <th>Grade</th>
</tr>
<?php

    function penilaian($nama,$mtk,$inggris,$indo,$kejuruan){ 
        $rata = ($mtk + $inggris + $indo + $kejuruan) / 4;
        echo "<tr align ='center'>";
        echo "<th>$nama</th>";
        echo "<th>$mtk</th>";
        echo "<th>$inggris</th>";
        echo "<th>$indo</th>";
        echo "<th>$kejuruan</th>";
        echo "<th>$rata</th>";

        if ($rata >= 75){
            echo "<th>Lulus</th>";
        }else{
            echo "<th>Tidak Lulus</th>";
        }

        if ($rata >= 90 && $rata < 101){
            echo "<th>A</th>";
        }
        else if ($rata >= 80 && $rata < 90){
            echo "<th>B</th>";
        }
        else if ($rata >= 70 && $rata < 80){
            echo "<th>C</th>";
        }
        else if ($rata >= 50 && $rata < 70){
            echo "<th>D</th>";
        }
        else if ($rata >= 0 && $rata < 50){
            echo "<th>E</th>";
        }
        echo "</tr>";
    }
    penilaian("Azhar Rizky Aulia",90,93,87,90);
    penilaian("Lia Amelia",87,90,93,90);

?>
</table>
</center>