<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Perizinan</title>
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
<br>
<div class= "container">
<div class="card">
  <h5 class="card-header bg-danger text-white">Form</h5>
  <div class="card-body">
  <form action="" method = "POST">
    <div class= "container">
    <br>
    <h2><center>Perizinan Masuk Mall</center></h2>
    <br>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Lengkap</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "nama">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Umur</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name = "umur">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Status Vaksin</label>
      <select class="form-control" name = "status" value = "status">
        <option value = ""> </option>
          <option value = "sudah">Sudah</option>
          <option value = "belum">Belum</option>
    </select>
    </div>
    <button type="submit" class="btn btn-primary" name = "mulai">Submit</button>
    </div>
    </form>
    </div>
  </div>
</div>
    
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
  <h5 class="card-header bg-danger text-white">Form</h5>
  <div class="card-body">
<center>
<table>
<?php 

if(isset($_POST["mulai"])){
    $nama = @$_POST['nama'];
    $umur= @$_POST['umur'];
    $status= @$_POST['status'];

    echo "<tr>
    <td colspan=4><hr></td>
    </tr>";
    
    echo "<tr>
    <td colspan=4><h2><i>Izin</i></h2></td>
    </tr>";
    
    echo "<tr>";
    echo "<td>Nama Anda</td>";
    echo "<td>:</td>";
    echo "<td>$nama</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Umur</td>";
    echo "<td>:</td>";
    echo "<td>$umur</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Status Vaksin</td>";
    echo "<td>:</td>";
    echo "<td>$status</td>";
    echo "</tr>";

    if ($umur >= 12 && $umur < 50){
        if ($status == "sudah"){
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td><h2><i>Diizinkan</i></h2></td>";
            echo "</tr>";
        }else if ($status == "belum"){
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td><h2><i>Tidak Diizinkan</i></h2></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td><a href = 'https://pedulilindungi.id'>Vaksin Disini</a></td>";
            echo "</tr>";
        }
    }
        else if ($umur < 12){
            if ($status == "sudah"){
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td><h2><i>Tidak Diizinkan</i></h2></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td>Karena Tidak Cukup Umur</td>";
                echo "</tr>";
            }else if ($status == "belum"){
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td><h2><i>Tidak Diizinkan</i></h2></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td>Karena Tidak Cukup Umur</td>";
                echo "</tr>";
        }
    }else if ($umur > 50){
        if ($status == "sudah"){
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td><h2><i>Tidak Diizinkan</i></h2></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>Karena Umur Anda Diatas 50</td>";
            echo "</tr>";
        }else if ($status == "belum"){
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td><h2><i>Tidak Diizinkan</i></h2></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>Karena Umur Anda Diatas 50</td>";
            echo "</tr>";
    }
        }
}
?>
</table>
</center>
</div>
</div>