<?php 
// $nilai = [
//     [90,50,10,47],
//     [80,90,50,78],
//     [20,30,40,98],
//     [79,89,90,80]
// ];
// echo $nilai[2][1] . "<br>" .$nilai[3][2] . "<br>" .$nilai[1][3];

// $x = [
//     ["A","B","C"],
//     [20,30,40]
// ];
// echo "<br>Nilai " .$x[0][0] ." adalah " . $x[1][1];

//array 2 dimensi + key
$nilai = [
    ["Andri" => 10, "Toni" => 30],
    ["Desi" => 67, "Dina" =>70]
];
echo $nilai[1]['Desi'];
?>