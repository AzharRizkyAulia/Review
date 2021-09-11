<?php

$menu = [
  [
    "nama" => "Beranda"
  ],
  [
    "nama" => "Berita",
    "subMenu" => [
      [
        "nama" => "Olahraga",
        "subMenu" => [
          [
            "nama" => "Bola"
          ],
          [
            "nama" => "Bulu Tangkis"
          ]
        ]
      ],
      [
        "nama" => "Politik"
      ],
      [
        "nama" => "Manca Negara"
      ]
    ]
  ],
  [
    "nama" => "Tentang"
  ],
  [
    "nama" => "Kontak"
  ],
];

function tampilkanMenuBertingkat (array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
      echo "<li>{$item['nama']}</li>";
    }
    echo "</ul>";
  }
  tampilkanMenuBertingkat($menu);

function tampilkanMenuBertingkat2 (array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
      echo "<li>{$item['nama']}</li>";
  
      # periksa apakah ia memiliki atribut subMenu
      # dan apakah attribut tersebut memiliki isi
      if (@$item['subMenu'] && count($item['subMenu'])) {
        # jika ia panggil diri sendiri
        tampilkanMenuBertingkat2($item['subMenu']);
      }
    }
    echo "</ul>";
  }

?>
