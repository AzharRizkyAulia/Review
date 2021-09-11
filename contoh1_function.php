<?php

// function sapaPengunjung () {
//   echo "<h1>Halo, selamat datang!</h1>";
//   echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";
// }
// sapaPengunjung();

//========================================================================================
// function Pengunjung ($nama) {
//     echo "<h1>Halo {$nama}, selamat datang!</h1>";
//     echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";
//   }
// Pengunjung("Nurul Huda");
// Pengunjung("Ibnu Zakariyya");
// Pengunjung("Anshori Akbar");

//========================================================================================
// function sapaPengunjung ($nama, $jumlahKunjungan) {
//     echo "<h1>Halo {$nama}, selamat datang!</h1>";
//     echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";
  
//     if ($jumlahKunjungan > 10) {
//       echo "<p>Kami memiliki hadiah ebook gratis untuk anda karena anda telah mengunjungi situs kami sebanyak {$jumlahKunjungan} kali.</p>";
//     }
//   }
//   sapaPengunjung("Nurul Huda", 20);
//=======================================================================================

function sapaPengunjung (string $nama = 'Anonimous', int $jumlahKunjungan = 0) {
  echo "<h1>Halo {$nama}, selamat datang!</h1>";
  echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";

  if ($jumlahKunjungan > 10) {
    echo "<p>Kami memiliki hadiah ebook gratis untuk anda karena anda telah mengunjungi situs kami sebanyak {$jumlahKunjungan} kali.</p>";
  }
}
sapaPengunjung("Nurul Huda", 20);
?>