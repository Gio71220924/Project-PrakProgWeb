<?php
  require 'koneksi.php';
  session_start();
  if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $query = "SELECT * FROM data_pemesanan WHERE username = '$username' AND tanggal_konser < CURDATE()";
    $result = mysqli_query($koneksi,$query);
    $tampung = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $tampung[] = $row;
    }
  }else{
    header("location: login.php");
  }



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style-pesan.css" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link rel="icon" type="images/icon.png" href="images/icon.png">
    <title>Website Pemesanan Tiket G-VicxID</title>
    <style>
      <?php
      
      include 'riwayat.css';
      
      ?>
    </style>
  </head>
  <body>
    <header>
      <!-- Navbar -->
      <nav class="navbar">
        <!-- Icon --> 
        <div class="icon-name" style="float: left">
          <table>
            <tr>
              <td rowspan="4"><img src="images/icon.png" alt="logo" class="logo" /></td>
            </tr>
            <tr>
              <td id="keterangan-logo">Website Pemesanan Tiket</td>
            </tr>
            <tr>
              <td id="nama-web">G-VicxID</td>
            </tr>
          </table>
        </div>
        <!-- Icon end -->
        <!-- Menu -->
        <div class="menu">
          <a href="#" class="menu-navbar" id="logout">LOGOUT</a>
          <a href="my-ticket.php" class="menu-navbar">TIKETKU</a>
          <a href="tiket-page.php" class="menu-navbar">TIKET</a>
          <a href="home-page.php" class="menu-navbar">HOME</a>
        </div>
        <!-- Menu end -->
      </nav>
      <!-- Navbar end -->
    </header>

    <main>
        <div class="tombol">
            <a href="tiket-saya.php" class="tiket">TIKET SAYA</a>
            <a href="riwayat.php" class="riwayat">RIWAYAT TIKET</a>
        </div>

        <div class="cover">
          <?php foreach($tampung as $data){ ?>
            <div class="card-tiket">
                <div class="header">
                    <div class="konser">
                        <?php echo $data["nama_konser"] ?> 
                    </div>
                    <div class="lokasi">
                        <?php echo $data["lokasi_konser"] ?> 
                    </div>
                </div>
                <div class="name">
                      <?php echo $data["nama"] ?> 
                      <h4>Expired</h4>
                </div>
                <div class="conten">
                    <div class="artis">
                        <p class="title">Artis</p>
                        <p class="deskripsi"><?php echo $data["artis_konser"] ?> </p>
                    </div>
                    <div class="waktu">
                        <p class="title">Waktu</p>
                        <p class="deskripsi"><?php echo $data["tanggal_konser"] ?> </p>
                    </div>
                    <div class="kelas">
                        <p class="title">Kelas</p>
                        <p class="deskripsi"> <?php echo $data["tiket"] ?> </p>
                    </div>
                </div>
            </div>
          <?php } ?>
        </div>

    </main>
      
  <footer>
    <div class="keterangan-footer">
      <img src="images/icon.png" alt="logo" class="logo" />
        <h1>G-VicxID</h1>
        <p>Website ini merupakan website pemesanan tiket konser yang dibuat oleh tiga orang, yaitu: Gio, Vicky, dan Vincen. Website ini dibuat sebagai Proyek MataKuliah Praktikum Pemograman Web</p>
      </div>

      <div class="kontak">
        <h1>Kontak</h1>
        <table class="table-kontak">
          <tr>
            <td rowspan="2" class="gambaremail"><img src="images/icon-gmail.png" width="auto" height="20px" alt="logoemail" /></td>
          </tr>
          <tr>
            <td class="email">gvickID@gmail.com</td>
          </tr>
          <tr>
            <td rowspan="2" class="gambartelpon"><img src="images/icon-phone.png" width="auto" height="25px" alt="telpon" /></td>
          </tr>
          <tr>
            <td class="notel">+62 274123456</td>
          </tr>

          <tr>
            <td class="ig"><img src="images/icon-ig.png" width="auto" height="30px" alt="" /></td>
            <td class="username">@gvickID</td>
          </tr>
        </table>
      </div>

      <div class="informasi">
        <h1>Informasi</h1>
        <table class="Info">
          <tr>
            <td class="syarat">Syarat dan Ketentuan</td>
          </tr>

          <tr>
            <td class="faq">FAQ</td>
          </tr>

          <tr>
            <td class="bayar">Pilihan Pembayaran</td>
          </tr>

          <tr>
            <td class="bantu">Kontak Bantuan</td>
          </tr>
        </table>
      </div>

      <div class="contact-us">
        <h1>Concact Us</h1>
        <form class="form">
          <textarea name="5" id="" cols="30" rows="6" placeholder="Masukan pesan anda"></textarea>
          <br />
          <input type="submit" name="submit" id="submit" value="Submit" class="submit" />
        </form>
      </div>

      <div class="copyright">
        <p>@COPYRIGHT 2024 VVG</p>
      </div>
    </footer>
  </body>
    <script>
    function logout() {
      var keluar = window.confirm("Apakah anda yakin ingin logout?");
      if (keluar) {
        window.location='hapusSession.php';
      }
    }
  </script>
</html>
