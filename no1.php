<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Penggajihan</title>
  </head>
  <body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Azhar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="no1.php">Penggajihan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="no3.php">Vaksin <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="no2.php">Pengulangan <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<!--Form Input-->
    <form action =""  method = "POST">
    <div class= "container"><br>
    <div class="card">
    <h5 class="card-header bg-dark text-white">Form</h5>
    <div class="card-body">
    <br>
    <h2><center>Penggajihan PT. Garuda Kelinci Akur</center></h2>
    <br>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Bendahara</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "bendahara">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Nama Pekerja</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name = "pekerja">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Jenis Kelamin</label>
      <select class="form-control" name = "jk" value = "Jenis Kelamin">
        <option value = ""> </option>
          <option value = "Laki-Laki">Laki-Laki</option>
          <option value = "Perempuan">Perempuan</option>
    </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Penggajihan</label>
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "tanggal">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Jabatan</label>
      <select class="form-control" name = "jabatan" value = "jabatan">
        <option value = "">--Pilih Jabatan--</option>
          <option value = "Direktur">Direktur</option>
          <option value = "Manager">Manager</option>
          <option value = "Karyawan">Karyawan</option>
          <option value = "OB">OB</option>
    </select>
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Pendidikan Terakhir</label>
      <select class="form-control" name = "pendidikan" value= "pendidikan">
          <option value = "">--Pendidikan Terakhir--</option>
            <option value = "SD">SD</option>
            <option value = "SMP">SMP</option>
            <option value = "SMA">SMA</option>
            <option value = "S1">S1</option>
    </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Lembur Rp20.000 / Hari</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "lembur">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Potongan</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "potongan">
    </div>
    <button type="submit" class="btn btn-primary" name = "kirim">Submit</button>
    </div>
    </div>
    </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<div class = "container">
<br>
<div class="card">
  <h5 class="card-header bg-dark text-white">Form</h5>
  <div class="card-body">
  <center>
<h2><i>Struktur Gaji</i></h2>
<table>
<?php 

if(isset($_POST["kirim"])){
    $bendahara= @$_POST['bendahara'];
    $pekerja= @$_POST['pekerja'];
    $jk=@$_POST['jk'];
    $tanggal=@$_POST['tanggal'];
    $jabatan=@$_POST['jabatan'];
    $pendidikan=@$_POST['pendidikan'];
    $lembur=@$_POST['lembur'];
    $potongan=@$_POST['potongan'];

    echo "<tr>
    <td colspan=4><hr></td>
    </tr>";
    echo "<tr>
    <td><h2><i>Gaji Pokok</i></h2></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>";
    echo "<tr>
    <td></td>
    <td></td>
    <td></td>
    <td>Tanggal : $tanggal</td>
    </tr>";
    echo "<tr>
    <td>Nama Karyawan</td>
    <td>:</td>
    <td>$pekerja</td>
    <td></td>
    </tr>";
    echo "<tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>$jk</td>
    <td></td>
    </tr>";
    echo "<tr>
    <td>Pendidikan Terakhir</td>
    <td>:</td>
    <td>$pendidikan</td>
    <td></td>
    </tr>";
    echo "<tr>
    <td>Jabatan</td>
    <td>:</td>
    <td>$jabatan</td>
    <td></td>
    </tr>";
    
    if ($jabatan == "Direktur"){
        $gaji = 10000000;
        echo "<tr>
        <td>Gaji</td>
        <td>:</td>
        <td>Rp.$gaji</td>
        <td></td>
        </tr>";
        echo "<tr>
        <td><h2><i>Tunjangan</i></h2></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>";
        if ($pendidikan == "S1"){
            $tunjangan = 1500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }

        else if ($pendidikan == "SMA"){
            $tunjangan = 1000000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }
        else if ($pendidikan == "SMP"){
            $tunjangan = 500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }
        else if ($pendidikan == "SD"){
            $tunjangan = 200000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }
    }



    else if ($jabatan == "Manager"){
        $gaji = 7500000;
        echo "<tr>
        <td>Gaji</td>
        <td>:</td>
        <td>Rp.$gaji</td>
        <td></td>
        </tr>";
        echo "<tr>
        <td><h2><i>Tunjangan</i></h2></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>";
        if ($pendidikan == "S1"){
            $tunjangan = 1500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }

        else if ($pendidikan == "SMA"){
            $tunjangan = 1000000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }
        else if ($pendidikan == "SMP"){
            $tunjangan = 500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }
        else if ($pendidikan == "SD"){
            $tunjangan = 200000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }
    }



    else if ($jabatan == "Karyawan"){
        $gaji = 5000000;
        echo "<tr>
        <td>Gaji</td>
        <td>:</td>
        <td>Rp.$gaji</td>
        <td></td>
        </tr>";
        echo "<tr>
        <td><h2><i>Tunjangan</i></h2></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>";
        if ($pendidikan == "S1"){
            $tunjangan = 1500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }

        else if ($pendidikan == "SMA"){
            $tunjangan = 1000000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }
        else if ($pendidikan == "SMP"){
            $tunjangan = 500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }
        else if ($pendidikan == "SD"){
            $tunjangan = 200000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }
    }


    else if ($jabatan == "OB"){
        $gaji = 2500000;
        echo "<tr>
        <td>Gaji</td>
        <td>:</td>
        <td>Rp.$gaji</td>
        <td></td>
        </tr>";
        echo "<tr>
        <td><h2><i>Tunjangan</i></h2></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>";
        if ($pendidikan == "S1"){
            $tunjangan = 1500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }

        else if ($pendidikan == "SMA"){
            $tunjangan = 1000000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }
        else if ($pendidikan == "SMP"){
            $tunjangan = 500000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }
        else if ($pendidikan == "SD"){
            $tunjangan = 200000;
            echo "<tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td>Rp.$tunjangan</td>
            <td></td>
            </tr>";
            if ($lembur >= 1){
                $wktlmbr = $lembur * 20000;
                echo "<tr>
                    <td>Vakasi Lembur</td>
                    <td>:</td>
                    <td>Rp.$wktlmbr</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Potongan</i></h2></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan + $wktlmbr - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan + $wktlmbr;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }else{
                echo "<tr>
                <td>Vakasi Lembur</td>
                <td>:</td>
                <td>Rp. 0</td>
                <td></td>
                </tr>";
                echo "<tr>
                <td><h2><i>Potongan</i></h2></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";
                if ($potongan >= 1){
                    $total2 = $gaji + $tunjangan - $potongan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp.$potongan</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2><i>:</i></h2></td>
                    <td><h2><i>Rp.$total2</i></h2></td>
                    <td></td>
                    </tr>";
                }else{
                    $total = $gaji + $tunjangan;
                    echo "<tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td>Rp. 0</td>
                    <td></td>
                    </tr>";
                    echo "<tr>
                    <td><h2><i>Total Gaji</i></h2></td>
                    <td><h2>:</h2></td>
                    <td><h2>Rp.$total</h2></td>
                    <td></td>
                    </tr>";
                }
            }
        }
    }
    echo "<tr>
    <td></td>
    <td></td>
    <td></td>
    <td>Bendahara : $bendahara</td>
    </tr>";


}
?>
</table>
</div>
</center>
<script type = "text/javascript" src = "js/bootstrap.min.js"></script>