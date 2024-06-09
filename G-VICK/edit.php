<?php
require 'koneksi.php';

if (isset($_POST["edit"])) {
  $id = $_POST["idPesan"];
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $noHp = $_POST["noHp"];
  $usia = $_POST["usia"];
  
  $query = "UPDATE data_pemesanan SET
            nama = '$nama',
            email = '$email',
            noHp = '$noHp',
            usia = '$usia' WHERE id_pesan = $id";
  mysqli_query($koneksi,$query);
  if (mysqli_affected_rows($koneksi) >0) {
    header("Location: tiket-saya.php");
  }
}

$id_pesan = $_GET["id"];

$query = "SELECT * FROM data_pemesanan WHERE id_pesan = $id_pesan";
$result = mysqli_query($koneksi,$query);
$data = mysqli_fetch_assoc($result);

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
      
      include 'edit.css';
      
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
          <a href="hapusSession.php" class="menu-navbar" id="logout">LOGOUT</a>
          <a href="tiket-saya.php" class="menu-navbar">TIKETKU</a>
          <a href="tiket-page.php" class="menu-navbar">TIKET</a>
          <a href="home-page.php" class="menu-navbar">HOME</a>
        </div>
        <!-- Menu end -->
      </nav>
      <!-- Navbar end -->
    </header>


    <main>
      <div class="breadcrums">
        <h1>Form Edit Data Diri</h1>
      </div>  
      <hr>  
            <form class="formall" method="post" action="">
              <div class="flex">
            
                <table class="formtb">
                <tr>
                  <td> 
                    <h2 class="nama">Nama</h2>
                     <input type="hidden" name="idPesan" value="<?php echo $data["id_pesan"]; ?>">
                    <input type="text" name="nama" class="boxnama" size="40" height="50" required value="<?php echo $data["nama"]; ?>">
                  </td>
                  <td>
                        <h2 class="email-pesan">E-mail</h2>
                        <input type="email" name="email" class="boxemail" size="40" required value="<?php echo $data["email"]; ?>">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h2 class="email-pesan">Nama Konser</h2>
                        <input type="text" name="nama_konser" class="boxnamakonser" size="40" readonly value="<?php echo $data["nama_konser"]; ?>">
                      </td>
                      <td>
                      <h2 class="tanggal">Tanggal Konser</h2>
                        <input type="text" name="tanggal_konser" class="boxtanggal" value="<?php echo $data["tanggal_konser"]; ?>" size="40" readonly>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h2 class="email-pesan">Artis Konser</h2>
                        <input type="text" name="artis_konser" class="boxnamaartis" value="<?php echo $data["artis_konser"]; ?>" size="40" readonly>
                      </td>
                      <td>
                      <h2 class="email-pesan">Lokasi Konser</h2>
                        <input type="text" name="lokasi_konser" class="boxlokasi" value="<?php echo $data["lokasi_konser"]; ?>" size="40" readonly>
                      </td> 
                    </tr>
                  <tr>
                    <td>
                      <h2 class="notelpon">Nomor telepon</h2>
                      <input type="text" name="noHp" required size="40" value="<?php echo $data["noHp"]; ?>" class="boxnohp">
                    </td>
                    <td>
                      <h2 class="usia">Usia</h2>
                      <input type="number" name="usia" class="age" max="99" min="0" size="40" class = "boxusia" required value="<?php echo $data["usia"]; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h2 class="jenistiket">Jenis Tiket</h2>
                      <input type="text" name="tiket" id="jenistiket" class="boxjenis" value="<?php echo $data["tiket"]; ?>" size="40" readonly >
                    </td>
                    <td>
                      <h2 class="harga">Harga</h2>
                      <input type="text" name="harga" id="harga" class="boxharga" value="<?php echo $data["harga"]; ?>" readonly>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      
                    </td>
                  </tr>
                </table>
              </div>
              <div class="kotak">
                  <a href="tiket-saya.php">Batal </a>
                  <button type="submit" name="edit" id="pesan" class="isipesan" size="3">Edit</button>
              </div>
            </form>
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
