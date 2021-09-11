<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Form Biodata Diri</h2>
        <form action = "" method = "POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type = "text" name="nama"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type = "text" name = "tempat"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type = "date" name = "tanggal"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type = "radio" name = "jk" value = "Laki-Laki">Laki-Laki
                    <input type = "radio" name = "jk" value = "Perempuan">Perempuan</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name = "alamat"></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><select name = "agama" value = "agama">
                    <option value = ""></option>
                    <option value = "islam">Islam</option>
                    <option value = "kristen">Kristen</option>
                    <option value = "hindu">Hindu</option>
                    <option value = "buddha">Buddha</option>
                    <option value = "konghucu">Konghucu</option>
                    </select> </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><select name = "pendidikan">
                    <option value = ""></option>
                    <option value = "sd">SD</option>
                    <option value = "smp">SMP</option>
                    <option value = "sma">SMA</option>
                    <option value = "s1">S1</option>
                    <option value = "s2">S2</option>
                    </select> </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><select name = "status">
                    <option value = ""></option>
                    <option value = "pelajar">Pelajar</option>
                    <option value = "pegawai">Pegawai</option>
                    <option value = "guru">Guru</option>
                    </select> </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><input type = "checkbox" name = "hobi" value = "Main Game">Main Game
                    <input type = "checkbox" name = "hobi" value = "Membaca">Membaca
                    <input type = "checkbox" name = "hobi" value = "Menggambar">Menggambar</td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td><select name = "citacita">
                    <option value = ""></option>
                    <option value = "pns">PNS</option>
                    <option value = "pilot">Pilot</option>
                    <option value = "guru">Guru</option>
                    <option value = "programmer">Programmer</option>
                    </select> </td>
                </tr>
                <tr>
                    <td>Kata-kata Bijak</td>
                    <td>:</td>
                    <td><textarea name = "kata"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type = "submit" value = "simpan" name = "simpan"></td>
                </tr>
            </table>
</form>           
</body>
</html>

<table>
<?php 

if(isset($_POST["simpan"])){
    $nama= @$_POST['nama'];
    $tempat= @$_POST['tempat'];
    $tanggal=@$_POST['tanggal'];
    $jk=@$_POST['jk'];
    $alamat=@$_POST['alamat'];
    $agama=@$_POST['agama'];
    $pendidikan=@$_POST['pendidikan'];
    $status=@$_POST['status'];
    $hobi=@$_POST['hobi'];
    $citacita=@$_POST['citacita'];
    $kata=@$_POST['kata'];

    echo "========================= <br>";
    echo "========  Biodata Diri =======<br>";
    echo "========================= <br>";
    echo "<tr>";
    echo "<td>Nama</td>";
    echo "<td>:</td>";
    echo "<td>$nama<br></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Tempat Lahir</td>";
    echo "<td>:</td>";
    echo "<td>$tempat<br></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Tanggal Lahir</td>";
    echo "<td>:</td>";
    echo "<td>$tanggal<br></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Jenis Kelamin</td>";
    echo "<td>:</td>";
    echo "<td>$jk<br></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Alamat</td>";
    echo "<td>:</td>";
    echo "<td>$alamat<br></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Agama</td>";
    echo "<td>:</td>";
    echo "<td>$agama<br></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Pendidikan</td>";
    echo "<td>:</td>";
    echo "<td>$pendidikan<br></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Status</td>";
    echo "<td>:</td>";
    echo "<td>$status<br></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Hobi</td>";
    echo "<td>:</td>";
    echo "<td>$hobi<br></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Cita-Cita</td>";
    echo "<td>:</td>";
    echo "<td>$citacita<br></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Kata Bijak</td>";
    echo "<td>:</td>";
    echo "<td>$kata<br></td>";
    echo "</tr>";
}
?>
</table>