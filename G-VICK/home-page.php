<?php
require 'koneksi.php';
session_start();

$query = "SELECT * FROM data_konser LIMIT 4";
$result = mysqli_query($koneksi, $query);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="home-page-style.css" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <title>Home G-VicxID</title>
    <style>
        <?php
        include "home-page-style.css";
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
            <?php
                if (isset($_SESSION["username"])) {
                  echo '<lo href="#" class="menu-navbar" id="logout" onclick="logout()">LOGOUT</lo>';
                } else {
                  echo '<lo href="#" class="menu-navbar" id="logout" onclick="login()">LOGIN</lo>';
                }
            ?>
          <!-- <a href="#" class="menu-navbar" id="logout">LOGOUT</a> -->
          <a href="my-ticket.php" class="menu-navbar">TIKETKU</a>
          <a href="tiket-page.php" class="menu-navbar">TIKET</a>
          <a href="home-page.php" class="menu-navbar">HOME</a>
        </div>
        <!-- Menu end -->
      </nav>
      <!-- Navbar end -->
    </header>

    <main>
      <div class="banner">
        <div class="isi">
          <div class="tulisan">
            <h1>GET YOUR</h1>
            <h1>TICKET</h1>
          </div>
          <div class="deskripsi">
            <p>Haloooo
            <span id="username">
              <?php
                if (isset($_SESSION["username"])) {
                  echo $_SESSION["username"];
                }
              ?>
            </span>
            !!  Website G-VicxID ini adalah website yang dapat membantu kamu dalam mencari dan membeli tiket konser yang diadakan di Indonesia. Temukan kemudahan dalam persiapan mengikuti konser anda hanya di G-VicxID. <span>
              <?php
                if (!isset($_SESSION["username"])) {
                  echo 'Silahkan login untuk mengakses fitur-fitur yang ada. Silahkan';
                  echo '<a href="registrasi.php" id="regis"> registrasi di sini</a> jika belum memiliki akun :D';
                }
              ?>
            </span></p>
          </div>
          <a href="tiket-page.php" id="panjang">
            <!-- <div class="button">Details</div> -->
            Details
          </a>
        </div>
        <div class="img">
          <img src="images/conser.jpg" alt="Konser" />
        </div>
      </div>

      <div class="ticket">
        <div class="header"><h3>HOT</h3></div>
        <div class="content">
          <?php foreach($data as $dt) { ?>
            <a href="detail-page.php?id_konser=<?php echo $dt["id_konser"]; ?>" class="link">
              <div class="card">
                <div class="img"><img src="images/<?php echo $dt["gambar_konser"]; ?>" alt=""></div>
                <div class="deskripsi">
                  <div class="title">
                    <h4 class="artis"><?php echo $dt["artis_konser"]; ?></h4>
                    <h4 class="lokasi"><?php echo $dt["negara_konser"]; ?></h4>
                  </div>
                </div>
              </div>
              <?php } ?>
            </a>
        </div>
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
        <form class="form" onsubmit="return kontak()">
          <textarea name="5" id="textarea" cols="30" rows="6" placeholder="Masukan pesan anda"></textarea>
          <br />
          <input type="submit" name="submit" id="submit" value="Submit" class="submit"/>
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
    
    function login() {
      window.location='login.php';
    }

    function kontak(){
      if(document.getElementById("textarea").value ==""){
        alert("Diisi dulu form kontak nya ya!");
        return false;
      }else{
        alert("Terimakasih telah menghubungi kami!");
        return true;
      }
    }
  </script>
</html>
