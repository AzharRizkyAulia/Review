<table border="1">
<tr><th colspan=2 bgcolor='yellow'>Nilai Produktif Siswa</th></tr>
<?php 
$nama = ['Palah','Aziz','Aliyul','Adzura','Nabila','Cecep','Cindy','Maudy','Diki','Dinda'];
$nilai = [10,20,30,40,50,60,70,80,90,100];

echo "<tr><td>$nama[0]</td><td>$nilai[6]</td></tr>";
echo "<tr><td>$nama[9]</td><td>$nilai[7]</td></tr>";
echo "<tr><td>$nama[5]</td><td>$nilai[8]</td></tr>";
echo "<tr><td>$nama[7]</td><td>$nilai[9]</td></tr>";
echo "<tr><td>$nama[4]</td><td>$nilai[5]</td></tr>";

//menampilkan seluruh data
// foreach ($nama as $val){
//     echo $val;
//     echo "<br/>";
// }
// echo"<br>";
// foreach ($nilai as $val){
//     echo $val;
//     echo "<br/>";
// }

?>
</table>