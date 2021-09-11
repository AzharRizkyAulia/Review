<?php 
$example = [
    ['nama' => "abdul",
    'peliharaan' =>
    [
        ['nama' => "kelinci"],
        ['nama' => "marmot"],
    ],
],
[
    'nama' => "priyadi",
    'peliharaan' =>
    [
        ['nama' => "t-rex"],
        ['nama' => "stegosaurus"],
        ['nama' => "brachiosaurus"],
    ],
],
];

foreach ($example as $data){
    echo "Nama Pemilik :" .$data['nama'] . "<br>";
    echo "Daftar Hewan Peliharaan";
    echo "<ul>";
    foreach ($data['peliharaan'] as $peliharaan){
        echo "<li>" . $peliharaan['nama']. "</li>";
    }
    echo "<br>";
}
?>