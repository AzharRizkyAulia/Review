<?php 
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "Assalamualaikum Wr Wb")
{
    echo $salam . ", <br>";
    echo "Perkenalkan nama saya " . $nama . "<br>";
    //memanggil fungsi lain
    echo "Saya berusia " . hitungUmur(2005, 2021) . " tahun<br>";
    echo "Senang bekenalan dengan anda<br>";
}

//memanggil fungsi perkenalan
echo perkenalan("Azhar");
?>