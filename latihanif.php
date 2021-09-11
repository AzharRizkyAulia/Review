<?php

    $nilai = 0;
    if($nilai >= 90 && $nilai <= 100){
        echo "Nilai Anda $nilai, Grade A";
    }elseif($nilai >= 80 && $nilai <= 89) {
        echo "Nilai Anda $nilai, Grade B";
    }elseif($nilai >= 70 && $nilai <= 79) {
        echo "Nilai Anda $nilai, Grade C";
    }elseif($nilai >= 60 && $nilai <= 69) {
        echo "Nilai Anda $nilai, Grade D";
    }elseif($nilai <= 59 && $nilai >= 0) {
        echo "Nilai Anda $nilai, Grade E";
    }
    else{
        echo "Nilai Kacau !";
    }

?>