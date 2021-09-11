<?php 
$x = [
    [
    'nama' => "Azhar",
    'buah' => [
    ['nama' => "Mangga"],
    ['nama' => "Apel"],
    ['nama' => "Pear"]],
],
    // [
    //  'nama' => "Gk tau",
    //  'buah' => [
    //      ['nama' => "Apel"],
    //      ['nama' => "Pisang"]],
    // ]
];
foreach ($x as $data){
    echo "Nama Pemilik :" .$data['nama'] . "<br>";
    echo "Buah Kesukaan :";
    echo "<ul>";
    
    //list buah
    foreach ($data['buah'] as $buah){
        echo "<li>" . $buah['nama']. "</li>";
    }
    echo "</ul>";
}

// $z = [
//         [
//             'nama' => "Azhar",
//             'buah' => "Alpukat"
//         ],
//         [
//             'nama' => "Yey",
//             'buah' => "Sirsak"
//         ]
//     ];
// foreach ($z as $data2){
//     echo "Nama Pemilik : " . $data2['nama'] . "<br>";
//     echo "Buah Kesukaan : " . $data2['buah'] . "<br>";
//     echo "<ul>";
//     echo "</ul>";
// }
?>