<?php 

//=======================================================================
    function luas1($jari,$phi=3.14){
        $luas = $phi * $jari * $jari;
        return $luas;
    }
    echo "LUAS LINGKARAN = " . luas1(10) . "<br>";
//=======================================================================
    function luas2($alas,$tinggi){
        $luas = ($alas * $tinggi) * 0.5;
        return $luas;
    }
    echo "LUAS SEGITIGA = " . luas2(5,10) . "<br>";
//=======================================================================
    function luas3($panjang,$lebar){
        $luas = $panjang * $lebar;
        return $luas;
    }
    echo "LUAS PERSEGI PANJANG = " . luas3(5,3) . "<br>";
//=======================================================================

?>