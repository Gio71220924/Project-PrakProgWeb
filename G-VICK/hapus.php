<?php
    session_start();
    require 'koneksi.php';



    $id = $_GET["id"];
    $username = $_POST["username"];

    $query = "DELETE FROM data_pemesanan WHERE id_pesan='$id' AND username='$username'";


    $eksekusi = mysqli_query($koneksi, $query);


    if($eksekusi){
        header("location:tiket-saya.php");
    }else{
        echo "Data tidak berhasil dihapus!";
    }


?>