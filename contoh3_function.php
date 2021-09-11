<?php
//============================================================================ 
// function tampilkanAngka (int $jumlah, int $indeks = 1) {
//     echo "Perulangan ke-{$indeks} <br>";
  
//     # panggil diri sendiri selama $indeks <= $jumlah
//     if ($indeks < $jumlah) {
//       tampilkanAngka($jumlah, $indeks + 1);
//     }
//   }
//   tampilkanAngka(20);
//============================================================================

//============================================================================
// function tampilkanAngka (int $jumlah, int $indeks = 1) {
//     # panggil diri sendiri selama $indeks <= $jumlah
//     if ($indeks < $jumlah) {
//       tampilkanAngka($jumlah, $indeks + 1);
//     }
  
//     echo "Perulangan ke-{$indeks} <br>";
//   }
//   tampilkanAngka(10);
//============================================================================

//============================================================================
function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "<strong style='color: green'>
      Sebelum memanggil diri sendiri [{$indeks}]
    </strong><br>";
   
    # panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
      tampilkanAngka($jumlah, $indeks + 1);
    } else {
      echo "<strong style='color: red'>
        Proses terakhir.
      </strong><br>";
    }
  
    echo "<strong style='color: blue'>
      Sebelum memanggil diri sendiri [{$indeks}]
    </strong><br>";
  }
  tampilkanAngka(5);
//============================================================================
?>