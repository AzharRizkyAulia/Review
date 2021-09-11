<?php 
$nama = array("Andri","Joko","Sukma","Rina","Sari");
$nama2 = array(1=>"Andri",2=>"Joko",3=>"Sukma",4=>"Rina",5=>"Sari");
foreach ($nama as $val){
    echo $val;
    echo "<br/>";
}
echo "<br/>";
foreach ($nama2 as $kunci => $isi){
    echo "$kunci = $isi";
    echo "<br/>";
}
?>