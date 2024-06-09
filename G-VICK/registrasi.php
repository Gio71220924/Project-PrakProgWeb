<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="registrasi.css" />
    <link rel="icon" type="images/icon.png" href="images/icon.png">
  </head>
  <style>
    <?php
    include "registrasi.css";
    ?>
  </style>
  <body>
    <div class="container">
      <div class="kiri">
        <img src="images/icon.png" alt="" />
        <p class="satu">Welcome !</p>
        <p class="dua">"Ready to Rock? Sign up dan Cari Tiket Buat Konser Favoritmu!"</p>
      </div>
      <div class="kanan">
        <p class="satu">Website Pemesanan Tiket</p>
        <p class="dua">G-VicxID</p>
        <p class="login">Registrasi</p>
        <form action="" method="post">
          <div class="input">
            <label for="namaLengkap" class="namaLengkap">Nama</label><br />
            <input type="text" name="namaLengkap" id="namaLengkap" class="namaLengkapid" placeholder="masukkan nama lengkap anda" required/><br />

            <label for="nomorHp" class="nomorHp">Nomor HP</label><br />
            <input type="number" name="nomorHp" id="nomorHp" class="nomorHpid" placeholder="masukkan nomor HP anda" required/><br />

            <label for="email" class="email">E-mail</label><br />
            <input type="text" name="email" id="email" class="emailid" placeholder="masukkan e-mail anda" required/><br />

            <label for="username" class="username">Username</label><br />
            <input type="text" name="username" id="username" class="userid" placeholder="masukkan username anda" required/><br />

            <label for="password" class="password">Password</label><br />
            <input type="password" name="password" id="password" class="passid" placeholder="masukkan password anda" required/><br />
          </div>
          <div class="tombol">
            <a href="home-page.php" class="batal">
              <p>Batal</p>
            </a>
            <button type="submit" class="daftar" name="daftar">Daftar</button>
          </div>
        </form>
        <br>
        <br>
        <?php
          include "koneksi.php";
          if (isset($_POST["daftar"])) {
            $nama = $_POST["namaLengkap"];
            $nohp = $_POST["nomorHp"];
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = $_POST["password"];

            $cekUsername = "SELECT * FROM `user` WHERE `username` = '$username'";
            if (mysqli_query($koneksi, $cekUsername)) {
              echo '<script>alert("Registrasi gagal! Username sudah ada, silahkan gunakan username yang lain!");</script>';
            } else {
              $query = "INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `email`, `noHp`) VALUES (NULL, '$nama', '$username', '$password', '$email', '$nohp');";
              if (mysqli_query($koneksi, $query)) {
                echo '<script>alert("Registrasi berhasil! Silahkan login!");window.location.href="home-page.php"</script>';
              } else {
                echo '<p id="notif">Registrasi gagal<p>';
              }
            }
          }
          mysqli_close($koneksi);
        ?>
      </div>
    </div>
  </body>
</html>
