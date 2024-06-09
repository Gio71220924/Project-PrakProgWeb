<?php
require 'koneksi.php';
session_start();

$updateid = $_POST["id_konser"];

if ($_POST["datavvip"] == "") {
    $pesanvvip = 0;
}else{
    $pesanvvip = $_POST["datavvip"];
}

if ($_POST["datavip"] == "") {
    $pesanvip = 0;
}else{
    $pesanvip = $_POST["datavip"];
}

if ($_POST["datapre"] == "") {
    $pesanpremium = 0;
}else{
    $pesanpremium = $_POST["datapre"];
}

if ($_POST["datareg"] == "") {
    $pesanreguler = 0;
}else{
    $pesanreguler = $_POST["datareg"];
}


// Untuk Ambil Data Konser 
$datakonser = "SELECT stock_vvip, stock_vip, stock_premium, stock_reguler from data_konser WHERE id_konser = $updateid";
$getdatakonser = mysqli_query($koneksi,$datakonser);
$arraydatakonser = mysqli_fetch_assoc($getdatakonser);

$vvipsekarang = $arraydatakonser["stock_vvip"];
$vipsekarang = $arraydatakonser["stock_vip"];
$premiumsekarang = $arraydatakonser["stock_premium"];
$regulersekarang = $arraydatakonser["stock_reguler"];

$hasilvvip = $vvipsekarang - $pesanvvip;
$hasilvip = $vipsekarang - $pesanvip;
$hasilpremium = $premiumsekarang - $pesanpremium;
$hasilreguler = $regulersekarang - $pesanreguler;

// Untuk Update Stock
$updatestokkonserv = "UPDATE data_konser SET stock_vvip = '$hasilvvip',stock_vip = '$hasilvip',stock_premium = '$hasilpremium', stock_reguler = '$hasilreguler' WHERE id_konser = $updateid";
mysqli_query($koneksi,$updatestokkonserv); 


$username = $_SESSION["username"];
$data = count($_POST["nama"]);

$nama = $_POST["nama"];
$email = $_POST["email"];
$nama_konser = $_POST["nama_konser"];
$tanggal_konser = $_POST["tanggal_konser"];
$artis_konser = $_POST["artis_konser"];
$lokasi_konser = $_POST["lokasi_konser"];
$noHp = $_POST["noHp"];
$usia = $_POST["usia"];
$tiket = $_POST["tiket"];
$harga = $_POST["harga"];

for ($i=0; $i < $data; $i++) { 
    $query = "INSERT INTO data_pemesanan VALUES(
        null,
        '$username',
        '$nama[$i]',
        '$email[$i]',
        '$nama_konser[$i]',
        '$tanggal_konser[$i]',
        '$artis_konser[$i]',
        '$lokasi_konser[$i]',
        '$noHp[$i]',
        '$usia[$i]',
        '$tiket[$i]',
        '$harga[$i]'
        )";
    mysqli_query($koneksi,$query);
}

if (mysqli_affected_rows($koneksi) > 0) {
    header("Location: payment-notif.php");
}else{
    echo "Gagal Insert";
}


?>