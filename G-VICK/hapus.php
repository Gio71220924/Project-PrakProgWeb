<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

$id = $_GET["id"];
$username = $_SESSION["username"];

$query = "DELETE FROM data_pemesanan WHERE id_pesan='$id' AND username='$username'";

$eksekusi = mysqli_query($koneksi, $query);

if ($eksekusi) {
    header("location:tiket-saya.php");
} else {
    echo "Data tidak berhasil dihapus!";
}
?>
