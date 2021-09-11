<?php 
if(isset($_POST['cetak'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $pai = $_POST['pai'];
    $pkn = $_POST['ppkn'];
    $indonesia = $_POST['indo'];
    $mtk = $_POST['mtk'];
    $inggris = $_POST['inggris'];
    $kwu = $_POST['kwu'];
    $quran = $_POST['quran'];
    $bk = $_POST['bk'];
    $rpl = $_POST['rpl'];
    $tkj = $_POST['tkj'];
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

        <tr>
            <td>1</td>
            <td align="left">Pendidikan Agama Islam</td>
            <td>
                <?php 
                if ($pai[$i] > 100) {
                    echo "Nilai terlalu tinggi";
                } elseif ($pai[$i] > 85 && $pai[$i] <= 100 ) { 
                    $grade[$i] = "A";
                    echo "$grade[$i]";
                    $bobot_pai[$i] = 4;
                } elseif ($pai[$i] >  70 && $pai[$i] <= 85 )  { 
                    $grade[$i] = "B";
                    echo "$grade[$i]";
                    $bobot_pai[$i] = 3; 
                } elseif ($pai[$i] >  60 && $pai[$i] <= 70 )  {
                    $grade[$i] = "C";
                    echo "$grade[$i]";
                    $bobot_pai[$i] = 2;  
                } elseif($pai[$i] >  40 && $pai[$i] <= 60 )  {
                    $grade[$i] = "D";
                    echo "$grade[$i]";
                    $bobot_pai[$i] = 1; 
                } elseif($pai[$i] >  0 && $pai[$i] <= 40 )  {
                    $grade[$i] = "E";
                    echo "$grade[$i]";
                    $bobot_pai[$i] = 0; 
                } elseif ($pai[$i] <= 0){
                    echo "Nilai anda minus";
                } else {
                    echo "OON";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td align="left">PPKN</td>
            <td>
                <?php
                if ($pkn[$i] > 100) {
                    echo "Nilai terlalu tinggi";
                } elseif ($pkn[$i] > 85 && $pkn[$i] <= 100 ) { 
                    $grade[$i] = "A";
                    echo "$grade[$i]";
                    $bobot_pkn[$i] = 4;
                } elseif ($pkn[$i] >  70 && $pkn[$i] <= 85 )  { 
                    $grade[$i] = "B";
                    echo "$grade[$i]";
                    $bobot_pkn[$i] = 3; 
                } elseif ($pkn[$i] >  60 && $pkn[$i] <= 70 )  {
                    $grade[$i] = "C";
                    echo "$grade[$i]";
                    $bobot_pkn[$i] = 2; 
                } elseif($pkn[$i] >  40 && $pkn[$i] <= 60 )  {
                    $grade[$i] = "D";
                    echo "$grade[$i]";
                    $bobot_pkn[$i] = 1; 
                } elseif($pkn[$i] >  0 && $pkn[$i] <= 40 )  {
                    $grade[$i] = "E";
                    echo "$grade[$i]";
                    $bobot_pkn[$i] = 0;
                } elseif ($pkn[$i] <= 0){
                    echo "Nilai anda minus";
                } else {
                    echo "OON";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>3</td>
            <td align="left">Bahasa Indonesia</td>
            <td>
                <?php 
                 if ($indonesia[$i] > 100) {
                    echo "Nilai terlalu tinggi";
                } elseif ($indonesia[$i] > 85 && $indonesia[$i] <= 100 ) { 
                    $grade[$i] = "A";
                    echo "$grade[$i]";
                    $bobot_indo[$i] = 4; 
                } elseif ($indonesia[$i] >  70 && $indonesia[$i] <= 85 )  { 
                    $grade[$i] = "B";
                    echo "$grade[$i]";
                    $bobot_indo[$i] = 3; 
                } elseif ($indonesia[$i] >  60 && $indonesia[$i] <= 70 )  {
                    $grade[$i] = "C";
                    echo "$grade[$i]";
                    $bobot_indo[$i] = 2;
                } elseif($indonesia[$i] >  40 && $indonesia[$i] <= 60 )  {
                    $grade[$i] = "D";
                    echo "$grade[$i]";
                    $bobot_indo[$i] = 1; 
                } elseif($indonesia[$i] >  0 && $indonesia[$i] <= 40 )  {
                    $grade[$i] = "E";
                    echo "$grade[$i]";
                    $bobot_indo[$i] = 0;
                } elseif ($indonesia[$i] <= 0){
                    echo "Nilai anda minus";
                } else {
                    echo "OON";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>4</td>
            <td align="left">Matematika</td>
            <td>
                <?php
                if ($mtk[$i] > 100) {
                    echo "Nilai terlalu tinggi";
                } elseif ($mtk[$i] > 85 && $mtk[$i] <= 100 ) { 
                    $grade[$i] = "A";
                    echo "$grade[$i]";
                    $bobot_mtk[$i] = 4; 
                } elseif ($mtk[$i] >  70 && $mtk[$i] <= 85 )  { 
                    $grade[$i] = "B";
                    echo "$grade[$i]";
                    $bobot_mtk[$i] = 3; 
                } elseif ($mtk[$i] >  60 && $mtk[$i] <= 70 )  {
                    $grade[$i] = "C";
                    echo "$grade[$i]";
                    $bobot_mtk[$i] = 2; 
                } elseif($mtk[$i] >  40 && $mtk[$i] <= 60 )  {
                    $grade[$i] = "D";
                    echo "$grade[$i]";
                    $bobot_mtk[$i] = 1; 
                } elseif($mtk[$i] >  0 && $mtk[$i] <= 40 )  {
                    $grade[$i] = "E";
                    echo "$grade[$i]";
                    $bobot_mtk[$i] = 0; 
                } elseif ($mtk[$i] <= 0){
                    echo "Nilai anda minus";
                } else {
                    echo "OON";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>5</td>
            <td align="left">Bahasa Inggris</td>
            <td>
                <?php 
                if ($inggris[$i] > 100) {
                    echo "Nilai terlalu tinggi";
                } elseif ($inggris[$i] > 85 && $inggris[$i] <= 100 ) { 
                    $grade[$i] = "A";
                    echo "$grade[$i]";
                    $bobot_inggris[$i] = 4;
                } elseif ($inggris[$i] >  70 && $inggris[$i] <= 85 )  { 
                    $grade[$i] = "B";
                    echo "$grade[$i]";
                    $bobot_inggris[$i] = 3; 
                } elseif ($inggris[$i] >  60 && $inggris[$i] <= 70 )  {
                    $grade[$i] = "C";
                    echo "$grade[$i]";
                    $bobot_inggris[$i] = 2;
                } elseif($inggris[$i] >  40 && $inggris[$i] <= 60 )  {
                    $grade[$i] = "D";
                    echo "$grade[$i]";
                    $bobot_inggris[$i] = 1; 
                } elseif($inggris[$i] >  0 && $inggris[$i] <= 40 )  {
                    $grade[$i] = "E";
                    echo "$grade[$i]";
                    $bobot_inggris[$i] = 0; 
                } elseif ($inggris[$i] <= 0){
                    echo "Nilai anda minus";
                } else {
                    echo "OON";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>6</td>
            <td align="left">Produk Kreatif dan Kewirausahaan</td>
            <td>
                <?php
                if ($kwu[$i] > 100) {
                    echo "Nilai terlalu tinggi";
                } elseif ($kwu[$i] > 85 && $kwu[$i] <= 100 ) { 
                    $grade[$i] = "A";
                    echo "$grade[$i]";
                    $bobot_kwu[$i] = 4;
                } elseif ($kwu[$i] >  70 && $kwu[$i] <= 85 )  { 
                    $grade[$i] = "B";
                    echo "$grade[$i]";
                    $bobot_kwu[$i] = 3; 
                } elseif ($kwu[$i] >  60 && $kwu[$i] <= 70 )  {
                    $grade[$i] = "C";
                    echo "$grade[$i]";
                    $bobot_kwu[$i] = 2;
                } elseif($kwu[$i] >  40 && $kwu[$i] <= 60 )  {
                    $grade[$i] = "D";
                    echo "$grade[$i]";
                    $bobot_kwu[$i] = 1; 
                } elseif($kwu[$i] >  0 && $kwu[$i] <= 40 )  {
                    $grade[$i] = "E";
                    echo "$grade[$i]";
                    $bobot_kwu[$i] = 0;
                } elseif ($kwu[$i] <= 0){
                    echo "Nilai anda minus";
                } else {
                    echo "OON";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>7</td>
            <td align="left">Al-Quran</td>
            <td>
                <?php
                if ($quran[$i] > 100) {
                    echo "Nilai terlalu tinggi";
                } elseif ($quran[$i] > 85 && $quran[$i] <= 100 ) { 
                    $grade[$i] = "A";
                    echo "$grade[$i]";
                    $bobot_quran[$i] = 4;
                } elseif ($quran[$i] >  70 && $quran[$i] <= 85 )  { 
                    $grade[$i] = "B";
                    echo "$grade[$i]";
                    $bobot_quran[$i] = 3; 
                } elseif ($quran[$i] >  60 && $quran[$i] <= 70 )  {
                    $grade[$i] = "C";
                    echo "$grade[$i]";
                    $bobot_quran[$i] = 2; 
                } elseif($quran[$i] >  40 && $quran[$i] <= 60 )  {
                    $grade[$i] = "D";
                    echo "$grade[$i]";
                    $bobot_quran[$i] = 1; 
                } elseif($quran[$i] >  0 && $quran[$i] <= 40 )  {
                    $grade[$i] = "E";
                    echo "$grade[$i]";
                    $bobot_quran[$i] = 0;
                } elseif ($quran[$i] <= 0){
                    echo "Nilai anda minus";
                } else {
                    echo "OON";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>8</td>
            <td align="left">Bimbingan Konseling</td>
            <td>
                <?php
                if ($bk[$i] > 100) {
                    echo "Nilai terlalu tinggi";
                } elseif ($bk[$i] > 85 && $bk[$i] <= 100 ) { 
                    $grade[$i] = "A";
                    echo "$grade[$i]";
                    $bobot_bk[$i] = 4;
                } elseif ($bk[$i] >  70 && $bk[$i] <= 85 )  { 
                    $grade[$i] = "B";
                    echo "$grade[$i]";
                    $bobot_bk[$i] = 3;  
                } elseif ($bk[$i] >  60 && $bk[$i] <= 70 )  {
                    $grade[$i] = "C";
                    echo "$grade[$i]";
                    $bobot_bk[$i] = 2; 
                } elseif($bk[$i] >  40 && $bk[$i] <= 60 )  {
                    $grade[$i] = "D";
                    echo "$grade[$i]";
                    $bobot_bk[$i] = 1; 
                } elseif($bk[$i] >  0 && $bk[$i] <= 40 )  {
                    $grade[$i] = "E";
                    echo "$grade[$i]";
                    $bobot_bk[$i] = 0;
                } elseif ($bk[$i] <= 0){
                    echo "Nilai anda minus";
                } else {
                    echo "OON";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>9</td>
            <td align="left">Produktif RPL</td>
            <td>
                <?php
                if ($rpl[$i] > 100) {
                    echo "Nilai terlalu tinggi";
                } elseif ($rpl[$i] > 85 && $rpl[$i] <= 100 ) { 
                    $grade[$i] = "A";
                    echo "$grade[$i]";
                    $bobot_rpl[$i] = 4; 
                } elseif ($rpl[$i] >  70 && $rpl[$i] <= 85 )  { 
                    $grade[$i] = "B";
                    echo "$grade[$i]";
                    $bobot_rpl[$i] = 3;  
                } elseif ($rpl[$i] >  60 && $rpl[$i] <= 70 )  {
                    $grade[$i] = "C";
                    echo "$grade[$i]";
                    $bobot_rpl[$i] = 2;; 
                } elseif($rpl[$i] >  40 && $rpl[$i] <= 60 )  {
                    $grade[$i] = "D";
                    echo "$grade[$i]";
                    $bobot_rpl[$i] = 1; 
                } elseif($rpl[$i] >  0 && $rpl[$i] <= 40 )  {
                    $grade[$i] = "E";
                    echo "$grade[$i]";
                    $bobot_rpl[$i] = 0;
                } elseif ($rpl[$i] <= 0){
                    echo "Nilai anda minus";
                } else {
                    echo "OON";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>10</td>
            <td align="left">Produktif TKJ</td>
            <td>
                <?php
                if ($tkj[$i] > 100) {
                    echo "Nilai terlalu tinggi";
                } elseif ($tkj[$i] > 85 && $tkj[$i] <= 100 ) { 
                    $grade[$i] = "A";
                    echo "$grade[$i]";
                    $bobot_tkj[$i] = 4;
                } elseif ($tkj[$i] >  70 && $tkj[$i] <= 85 )  { 
                    $grade[$i] = "B";
                    echo "$grade[$i]";
                    $bobot_tkj[$i] = 3;  
                } elseif ($tkj[$i] >  60 && $tkj[$i] <= 70 )  {
                    $grade[$i] = "C";
                    echo "$grade[$i]";
                    $bobot_tkj[$i] = 2; 
                } elseif($tkj[$i] >  40 && $tkj[$i] <= 60 )  {
                    $grade[$i] = "D";
                    echo "$grade[$i]";
                    $bobot_tkj[$i] = 1; 
                } elseif($tkj[$i] >  0 && $tkj[$i] <= 40 )  {
                    $grade[$i] = "E";
                    echo "$grade[$i]";
                    $bobot_tkj[$i] = 0; 
                } elseif ($tkj[$i] <= 0){
                    echo "Nilai anda minus";
                } else {
                    echo "OON";
                }
             ?>
            </td>
        </tr>

        <tr>
            <td colspan="3" align="center" cellpadding="4">
                <?php 
                $rata = ($bobot_pai[$i] + $bobot_pkn[$i] + $bobot_indo[$i] + $bobot_mtk[$i] +
                $bobot_inggris[$i] + $bobot_kwu[$i] + $bobot_quran[$i] + $bobot_bk[$i] +
                $bobot_rpl[$i] + $bobot_tkj[$i]) / 10;
                echo "Nilai Rata-Ratanya Adalah : $rata"; 
                }?>
            </td>
        </tr>


</center>
</body>
</html>