<!DOCTYPE html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Belajar Form PHP</title>
</head>
<body>
   <h2>Tutorial Belajar Form HTML - PHP </h2>
   <form action=" " method="get">
   Disini tersedia 2 jenis menu<br/>
1. Makanan<br>
2. Minuman<br>
Pilih Sesuai Nominal Angka : <input type="number" name="pesan" />
     <br />
     <input type="submit" value="Proses Data" >
   </form>
</body>
</html>

<?php
if (isset($_GET['pesan']))
{
$menu = $_GET['pesan'];
switch ($menu) {
	case 1:
        echo "Makanan<br/>";
        echo "1. Nasi Goreng : 20.000 <br/>";
        echo "2. Ayam Goreng : 13.000 <br/>";
        echo "3. Ayam Bakar : 15.000 <br/>";
        echo "4. Nasi Putih : 5.000 <br/>";
        break;
	case 2:
		echo "Isi variabel angka adalah dua";
        break;
  
}
}
?>

<form action=" " method="get">
<input type='number' name='makanan' /><br />
</form>
<?php 
if (isset($_GET['makanan'])){
    $mkn = $_GET['makanan'];
    switch ($mkn){
        case 1:
        echo "Anda Memesan Nasi Goreng";
    }
}
?>