<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 3</title>
</head>
<body>
    <fieldset>  
        <legend>Fungsi - Input Data</legend>
            <form action ="" method="POST">
                <table>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type = "text" name = "nama"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type = "radio" name = "jk" value = "Laki-Laki">Laki-Laki
                            <input type = "radio" name = "jk" value = "Perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type = "date" name = "tanggal"></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><select name = "agama" value = "agama">
                            <option value = "">!-- Masukan Agama ---!</option>
                            <option value = "Islam">Islam</option>
                            <option value = "Kristen">Kristen</option>
                            <option value = "Hindu">Hindu</option>
                            <option value = "Buddha">Buddha</option>
                            <option value = "Konghucu">Konghucu</option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name = "alamat"></textarea></td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>:</td>
                        <td><input type = "checkbox" name = "hobi[]" value = "Main Game">Main Game
                        <input type = "checkbox" name = "hobi[]" value = "Membaca">Membaca
                        <input type = "checkbox" name = "hobi[]" value = "Menggambar">Menggambar
                        <input type = "checkbox" name = "hobi[]" value = "Memasak">Memasak
                        <input type = "checkbox" name = "hobi[]" value = "Menulis">Menulis</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type = "submit" value = "Simpan" name = "simpan"></td>
                    </tr>

                    <tr>
                        <td colspan=3><hr></td>
                    </tr>

                <?php 
                    if (isset($_POST['simpan'])){
                        $nama = @$_POST['nama'];
                        $jk = @$_POST['jk'];
                        $tanggal = @$_POST['tanggal'];
                        $agama = @$_POST['agama'];
                        $alamat = @$_POST['alamat'];
                        $hobi = @$_POST['hobi'];

                    function biodata($nama="",$jk="",$tanggal="",$agama="",$alamat="",$hobi=""){
                        echo "<tr>";
                        $hasil = "<td>Nama</td> <td>:</td> " . "<td>$nama</td>" . "</tr>";

                        echo "<tr>";
                        $hasil .= "<td>Jenis Kelamin</td> <td>:</td> <td>$jk</td></tr>";

                        echo "<tr>";
                        $hasil .= "<td>Tanggal Lahir</td> <td>:</td> <td>$tanggal</td></tr>";

                        echo "<tr>";
                        $hasil .= "<td>Agama</td> <td>:</td> <td>$agama</td></tr>";

                        echo "<tr>";
                        $hasil .= "<td>Alamat</td> <td>:</td> <td>$alamat</td></tr>";

                        echo "<tr>";
                        $hasil .= "<td>Hobi</td> <td>:</td>" . "<td>" . implode(", ", $hobi) . "</td>";
                        return $hasil;
                    }
                        echo biodata($nama,$jk,$tanggal,$agama,$alamat,$hobi);
                    }
                ?>
                 </table>
            </form>
        </legend>
    </fieldset>
</body>
</html>