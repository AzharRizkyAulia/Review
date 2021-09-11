<?php 

    $uang = 100000;
    $minum = 15000;
    $sosis = 25000;
    $sedekah = 10/100;
    $nemu = 50/100;

    $sisa1 = $uang - $minum;
    $sisa2 = $sisa1 - $sosis;
    $nilaisedekah = $sisa2 * $sedekah;
    $sisa3 = $sisa2 - $nilaisedekah;
    $nilainemu = $sisa3 * $nemu;
    $sisa4 = $sisa3 + $nilainemu;

    echo "Uang Ucup = <b>$uang</b>";
    echo "<hr>";

    echo "Jajan minum <b>$minum</b> <br/>";
    echo "Sisa uang Ucup jajan minum = <b>$sisa1</b>";
    echo "<hr>";

    echo "Jajan sosis bakar <b>$sosis</b> <br/>";
    echo "Sisa uang Ucup jajan sosis bakar + minum =<b> $sisa2</b>";
    echo "<hr>";

    echo "Sedekah ke musafir 10% dari <b>$sisa2</b> yaitu sebesar <b>$nilaisedekah</b> <br/>";
    echo "Sisa uang Ucup = <b>$sisa3</b>";
    echo "<hr>";

    echo "Nemu uang dijalan sebesar 50% dari sisa uang ucup <b>$sisa3</b> yaitu sebesar <b>$nilainemu</b><br/>";
    echo "Sisa uang ucup sekarang = <b>$nilainemu</b> + <b>$sisa3</b>";
    echo "<hr>";

    echo "Total uang ucup adalah = <b>$sisa4</b>";
    echo "<hr>";

?>