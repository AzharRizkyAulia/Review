<?php 
$example = [
    ['dosen' => "Aceng",
    'data' =>
    [
        ['ke' => "Data ke-1"],
        ['ke' => "Data ke-2"],
        ['ke' => "Data ke-3"]
    ],
    'mahasiswa1' => [
        ['nama' => "azhar"]],
    'mahasiswa2' => ['gk tau'],
    'mahasiswa3' => ['y'],
    
    'matkul1' => [
        ['nama' => "Matematika"],
        ['nama' => "IPA"],
        ['nama' => "Sains"]
    ],

    'matkul2' => [
        ['nama' => "Agama"],
        ['nama' => "Biologi"],
        ['nama' => "Informatika"]
    ],

    'matkul3' => [
        ['nama' => "Matematika"],
        ['nama' => "Sastra"],
        ['nama' => "Hukum"]
    ],

    'hobi1' => [
        ['nama' => "Membaca"],
        ['nama' => "Menggambar"]
    ],

    'hobi2' => [
        ['nama' => "Tidur"],
        ['nama' => "Melamun"]
    ],

    'hobi1' => [
        ['nama' => "Makan"],
        ['nama' => "Minum"]
    ]
]
];

foreach ($example as $data){
    echo "Nama Wali Dosen :" .$data['dosen'] . "<br>";
    echo "Daftar Mahasiswa";
    echo "<ul>";
    foreach ($data['data'] as $data1){
        echo "<li>" . $data1['ke']. "</li>";
    foreach ($data['mahasiswa1'] as $mahasiswa1){
        echo "Daftar Mahasiswa";
        echo $mahasiswa1['nama'];
    }
}
    echo "<br>";
}
?>