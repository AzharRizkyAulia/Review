<?php

    $nilai = 100;

    if($nilai >= 75 && $nilai <= 100){
        echo "Nilai Anda $nilai, Anda Lulus";
    }elseif($nilai < 75 && $nilai >= 0) {
        echo "Nilai Anda $nilai, Anda tidak lulus ";
    }else{
        echo "Nilai $nilai Tidak Ada";
    }

?>