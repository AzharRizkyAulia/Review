<?php 
$file = "movie2.json";
$data = file_get_contents($file);
$info = json_decode($data, true);

//gas
    echo "<center>";
    echo "<h3>Data Film</h3><br>";
    echo "<b>" .$info['Title'] . "</b>";
    echo "<br>";

    echo "<img src='spider.jpg' width='500' height='650'>";
    echo "</center>";

    echo "<table>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td>".$info['Plot'] ."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Tahun Rilis</b></td>";
    echo "<td>:".$info['Year'] ."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Tanggal Rilis</b></td>";
    echo "<td>:".$info['Released'] ."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Durasi Film</b></td>";
    echo "<td>:".$info['Runtime'] ."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Genre</b></td>";
    echo "<td>:". implode(", ", $info['Genre']) ."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Director</b></td>";
    echo "<td>:".$info['Director'] ."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Penulis</b></td>";
    echo "<ul> <td>";
    foreach ($info['Writers'] as $penulis){
        echo "<li>" .$penulis ."</li>";
    }
    echo "</td></ul>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Pemeran</b></td>";
    echo "<ul> <td>";
    foreach ($info['Actors'] as $pemeran){
        echo "<li>" .$pemeran ."</li>";
    }
    echo "</td></ul>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Bahasa</b></td>";
    echo "<td>:".$info['Language'] ."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Negara</b></td>";
    echo "<td>:".$info['Country'] ."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Penghargaan</b></td>";
    echo "<td>:".$info['Awards'] ."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Nilai</b></td>";
    echo "<td>:".$info['imdbRating'] ."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Vote</b></td>";
    echo "<td>:".$info['imdbVotes'] ."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>imdbID</b></td>";
    echo "<td>:".$info['imdbID'] ."</td>";
    echo "</tr>";
?>