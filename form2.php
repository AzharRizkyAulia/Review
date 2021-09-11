<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<center>
    <h2>Form Input Nilai Siswa<br>
    SMK ASSALAAM BANDUNG<br>
    Tahun 2021/2022<br></h2>

    <form action="hasil2.php" method="post">
    <table border="2" cellpadding="2">
        <tr>
            <th colspan="4" align="left">
                Nama :<br>
                <input type= "text" name = "nama[]">
                <br>
                Nis :<br>
                <input type= "number" name = "nis[]">
            </th>
        </tr>

        <tr>
            <th>No</th>
            <th>Mata Pelajaran</th>
            <th>Nilai</th>
        </tr>

        <tr>
            <td>1</td>
            <td align="left">Pendidikan Agama Islam</td>
            <td>
                <input type="number" name="nilai[]">
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td align="left">PPKN</td>
            <td>
                <input type="number" name="nilai[]">
            </td>
        </tr>

        <tr>
            <td>3</td>
            <td align="left">Bahasa Indonesia</td>
            <td>
                <input type="number" name="nilai[]">
            </td>
        </tr>

        <tr>
            <td>4</td>
            <td align="left">Matematika</td>
            <td>
                <input type="number" name="nilai[]">
            </td>
        </tr>

        <tr>
            <td>5</td>
            <td align="left">Bahasa Inggris</td>
            <td>
                <input type="number" name="nilai[]">
            </td>
        </tr>

        <tr>
            <td>6</td>
            <td align="left">Produk Kreatif dan Kewirausahaan</td>
            <td>
                <input type="number" name="nilai[]">
            </td>
        </tr>

        <tr>
            <td>7</td>
            <td align="left">Al-Quran</td>
            <td>
                <input type="number" name="nilai[]">
            </td>
        </tr>

        <tr>
            <td>8</td>
            <td align="left">Bimbingan Konseling</td>
            <td>
                <input type="number" name="nilai[]">
            </td>
        </tr>

        <tr>
            <td>9</td>
            <td align="left">Produktif RPL</td>
            <td>
                <input type="number" name="nilai[]">
            </td>
        </tr>

        <tr>
            <td>10</td>
            <td align="left">Produktif TKJ</td>
            <td>
                <input type="number" name="nilai[]">
            </td>
        </tr>

        <tr>
            <td colspan="3" align="center" cellpadding="4">
                <input type="submit" name="cetak" value="Cetak Nilai">
            </td>
        </tr>
        
    </table>
    </form>
</center>
</body>
</html>