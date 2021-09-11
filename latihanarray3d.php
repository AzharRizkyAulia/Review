<?php 
$x = [
    [
        'artikel' => "Detik.com",
        'berita1' => [
            ['jenis1' => "olahraga"]],
        'berita2' => [
            ['jenis2' => "ekonomi"]],
        'berita3' => [
            ['jenis3' => "politik"]],

        'olahraga1' => [
            ['or1' => "Sepak Bola"]],
        'olahraga2' => [
            ['or2' => "Bulu Tangkis"]],
        'olahraga3' => [
            ['or3' => "Atletik"]],

            'menu2' => [
                ['nama2' => "Sepak Bola Nasional"],
                ['nama2' => "Sepak Bola Internasional"]],
                
            'menu3' => [
                ['nama3' => "Bulu Tangkis Nasional"],
                ['nama3' => "Bulu Tangkis Internasional"]],

            'menu4' => [
                ['nama4' => "Atletik Nasional"],
                ['nama4' => "Atletik Internasional"]],

        'ekonomi1' => [
            ['eko1' => "Saham"]],
        'ekonomi2' => [
            ['eko2' => "Bank"]],

            'artikeleko1' => [
                ['artikel1' => "Saham A"],
                ['artikel1' => "Saham B"]],

            'artikeleko2' => [
                ['artikel2' => "Bank A"],
                ['artikel2' => "Bank B"]],

        'politik1' => [
            ['pol1' => "Korupsi"]],
        'politik2' => [
            ['pol2' => "Partai"]],
               
            'artikelpol1' => [
                ['artikelpolitik1' => "Korupsi A"],
                ['artikelpolitik1' => "Korupsi B"]],

            'artikelpol2' => [
                ['artikelpolitik2' => "Partai A"],
                ['artikelpolitik2' => "Partai B"]],
    ]
];
foreach ($x as $data){
    echo "Artikel :" .$data['artikel'] . "<br>";
    echo "Jenis Berita :";
    echo "<ol>";
    
    //list buah
    foreach ($data['berita1'] as $berita){
        echo "<li>" . $berita['jenis1']. "</li>";
    }
    foreach ($data['olahraga1'] as $menu){
        echo "<ul>";
        echo "<li>" . $menu['or1'] . "</li>";
        foreach ($data['menu2'] as $menu2){
            echo "<ul>";
            echo "<li>" . $menu2['nama2'] . "</li>";
            echo "</ul>";
        }
        echo "</ul>";
    }

    foreach ($data['olahraga2'] as $menu2){
        echo "<ul>";
        echo "<li>" . $menu2['or2'] . "</li>";
        foreach ($data['menu3'] as $menu3){
            echo "<ul>";
            echo "<li>" . $menu3['nama3'] . "</li>";
            echo "</ul>";
        }
        echo "</ul>";
    }

    foreach ($data['olahraga3'] as $or3){
        echo "<ul>";
        echo "<li>" . $or3['or3'] . "</li>";
        foreach ($data['menu4'] as $menu4){
            echo "<ul>";
            echo "<li>" . $menu4['nama4'] . "</li>";
            echo "</ul>";
        }
        echo "</ul>";
    }



    foreach ($data['berita2'] as $berita2){
        echo "<li>" . $berita2['jenis2'] . "</li>";
    }
    foreach ($data['ekonomi1'] as $ekonomi){
        echo "<ul>";
        echo "<li>" . $ekonomi['eko1'] . "</li>";
        foreach ($data['artikeleko1'] as $eko1){
            echo "<ul>";
            echo "<li>" . $eko1['artikel1'] . "</li>";
            echo "</ul>";
        }
        echo "</ul>";
    }

    foreach ($data['ekonomi2'] as $ekonomi){
        echo "<ul>";
        echo "<li>" . $ekonomi['eko2'] . "</li>";
        foreach ($data['artikeleko2'] as $eko2){
            echo "<ul>";
            echo "<li>" . $eko2['artikel2'] . "</li>";
            echo "</ul>";
        }
        echo "</ul>";
    }



    foreach ($data['berita3'] as $berita3){
        echo "<li>" . $berita3['jenis3'] . "</li>";
    }
    foreach ($data['politik1'] as $menu){
        echo "<ul>";
        echo "<li>" . $menu['pol1'] . "</li>";
        foreach ($data['artikelpol1'] as $pol1){
            echo "<ul>";
            echo "<li>" . $pol1['artikelpolitik1'] . "</li>";
            echo "</ul>";
        }
        echo "</ul>";
    }
    foreach ($data['politik2'] as $menu){
        echo "<ul>";
        echo "<li>" . $menu['pol2'] . "</li>";
        foreach ($data['artikelpol2'] as $pol2){
            echo "<ul>";
            echo "<li>" . $pol2['artikelpolitik2'] . "</li>";
            echo "</ul>";
        }
        echo "</ul>";
    }
    echo "</ol>";
}
?>