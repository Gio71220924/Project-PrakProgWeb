<?php
    session_start();
    include "koneksi.php";
    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $query = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'";
        $hasil = mysqli_query($koneksi,$query);
        if (mysqli_num_rows($hasil) != 0) {
            $_SESSION["username"] = $username;
            header("location:home-page.php");
        } else {
            $error = 'Maaf, username atau password salah!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="stylesheet" href="login.css">
    <style>
        <?php
        include "login.css";
        ?>
    </style>
</head>
<body>
    <div class="container">
        <div class="kiri">
            <img src="images/icon.png" alt="">
            <p class="satu">Welcome Back !</p>
            <p class="dua">"Ready to Rock? 
                Sign in dan Cari Tiket Buat Konser Favoritmu!"
                </p>
        </div>
        <div class="kanan">
            <p class="satu">Website Pemesanan Tiket</p>
            <p class="dua">G-VicxID</p>
            <!-- <p class="login">Login</p> -->
            <?php
                if(isset($error)){
                    echo '<p id="error">'.$error.'</p>';
                } else {
                    echo '<p class="login">Login</p>';
                }
            ?>
            <form action="" method="post">
            <div class="input">
                    <label for="username" class="username">Username</label><br>
                    <input type="text" name="username" id="username" class="userid" placeholder="masukkan username anda" required><br>
                    <label for="password" class="password">Password</label><br>
                    <input type="password" name="password" id="password" class="passid" placeholder="masukkan password anda" required><br>
                </div>
                <button type="submit" class="log" name="login">Login</button>
            </form>
            <p class="regis">Tidak Punya Akun ? <a href="registrasi.php"><span>Register Disini</span></a></p>
        </div>
    </div>
</body>
</html>