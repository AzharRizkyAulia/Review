<?php 
echo "=============================================<br/>";
echo "Menu di restoran<br/>";
echo "=============================================<br/>";
echo "1. Makanan<br/>";
echo "- nasi goreng : 20.000<br/>";
echo "- ayam goreng : 13.000<br/>";
echo "- ayam bakar : 15.000<br/>";
echo "- nasi putih : 5.000<br/><br/>";

echo "2. Minuman<br/>";
echo "- Jus Jeruk : 8.000<br/>";
echo "- Jus Alpukat : 10.000<br/>";
echo "- Air Mineral : 7.000<br/><br/>";
echo " Semua transaksi akan mendapatkan diskon<br/>";
echo " sebesar 20% apabila jumlah transaksi melebihi Rp.150.000<br/><br/>";
echo "=============================================<br/>";

$pesan = "makanan";
$pesanan = "Nasi Goreng";
$jumlah = 2;

if($pesan == "makanan"){
    if ($pesanan == "nasi goreng" || $pesanan == "Nasi Goreng"){
        $harga = 20000;
        $bayar = $jumlah * $harga;
        $diskon = $bayar - ($bayar * (20/100));
        echo "Anda Memesan $pesanan<br/>";
        echo "Harga : $harga<br/>";
        echo "Pembelian : $jumlah porsi<br/>";
        echo "Total Belanja Anda : $bayar<br/>";
        echo "=============================================<br/>";
            if($bayar >= 150000){
                echo "Karena Total Pembelanjaan Anda Diatas Rp150.000<br/>";
                echo "Maka Anda Mendapatkan Diskon 20%<br/>";
                echo "Maka Total Pembelanjaan Anda Menjadi : $diskon";
            }else{
                echo "Karena Total Pembelanjaan Anda Dibawah Rp150.000<br/>";
                echo "Maka Anda Tidak Mendapatkan Diskon 20%<br/>";
                echo "Maka Total Pembelanjaan Anda Menjadi : $bayar";
            }
    }
}

?>