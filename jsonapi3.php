<?php

    $url = "https://api.kawalcorona.com/";

    //persiapkan curl / init curl
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, $url);

    // return the transfer as string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // output contains the output string
    $dataCovid = curl_exec($ch);

    // tutup curl
    curl_close($ch);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid</title>
</head>
<body>
    <center>
        <h1> <i> Data Covid-19 Di Dunia </i> </h1>
        <fieldset>
        <legend>Data Covid</legend>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Negara</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
            </tr>
            <?php
                $no = 1;
                $data = json_decode($dataCovid);
                    foreach ($data as $covid) {
            ?>

            <tr>
                <td> <?php echo $no++; ?> </td>
    
                <td> <?php echo $covid->attributes->Country_Region; ?> </td>
                <td> <?php echo $covid->attributes->Confirmed; ?> </td>
                <td> <?php echo $covid->attributes->Recovered; ?> </td>
                <td> <?php echo $covid->attributes->Deaths; ?> </td>
            </tr>

            <?php
                    }
            ?>
            </fieldset>
        </table>
    </center>
</body>
</html>