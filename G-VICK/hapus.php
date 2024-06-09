<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

$id = $_GET["id"];
$username = $_SESSION["username"];

$selectnama = "SELECT nama_konser,tiket from data_pemesanan WHERE id_pesan = $id";
$result = mysqli_query($koneksi,$selectnama);
$data = mysqli_fetch_assoc($result);
$nama = $data["nama_konser"];

$selectdatakonser = "SELECT nama_konser,stock_vvip,stock_vip,stock_premium,stock_reguler FROM data_konser WHERE nama_konser = '$nama'";
$hasil = mysqli_query($koneksi,$selectdatakonser);
$akhir =  mysqli_fetch_assoc($hasil);

$namakonser = $akhir["nama_konser"];
$stockvvip = $akhir["stock_vvip"] + 1;
$stockvip = $akhir["stock_vip"] + 1;
$stockpremium = $akhir["stock_premium"] + 1;
$stockreguler = $akhir["stock_reguler"] + 1;




if ($data["tiket"] == "VVIP") {
    $updatevvip = "UPDATE data_konser SET stock_vvip = '$stockvvip' WHERE nama_konser = '$namakonser'";
    mysqli_query($koneksi,$updatevvip);   
}else if ($data["tiket"] == "VIP") {
    $updatevip = "UPDATE data_konser SET stock_vip = '$stockvip' WHERE nama_konser = '$namakonser'";
    mysqli_query($koneksi,$updatevip);

}elseif ($data["tiket"] == "PREMIUM") {
    $updatepremium = "UPDATE data_konser SET stock_premium = '$stockpremium' WHERE nama_konser = '$namakonser'";
    mysqli_query($koneksi,$updatepremium);

}elseif ($data["tiket"] == "REGULER") {
    $updatereguler = "UPDATE data_konser SET stock_reguler = '$stockreguler' WHERE nama_konser = '$namakonser'";
    mysqli_query($koneksi,$updatereguler);
}



$query = "DELETE FROM data_pemesanan WHERE id_pesan='$id' AND username='$username'";
$eksekusi = mysqli_query($koneksi, $query);

if ($eksekusi) {
    header("location:tiket-saya.php");
} else {
    echo "Data tidak berhasil dihapus!";
}
?>
