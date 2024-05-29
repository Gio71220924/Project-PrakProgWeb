<?php
session_start();
require 'koneksi.php';
function pesanan($pesanan){
      $tampung = [];
      if ($pesanan["jumlah-vvip"] > 0) {
          $vvip = $pesanan["jumlah-vvip"];
          for ($i=0; $i < $vvip ; $i++) { 
              $tampung[] = array("VVIP",$pesanan["harga-vvip"]);
          }
      }

      if ($pesanan["jumlah-vvip"] > 0) {
          $vip = $pesanan["jumlah-vip"];
          for ($i=0; $i < $vip ; $i++) { 
              $tampung[] = array("VIP",$pesanan["harga-vip"]);
          }
      }

      if ($pesanan["jumlah-premium"] > 0) {
        $premium = $pesanan["jumlah-premium"];
        for ($i=0; $i < $premium ; $i++) { 
            $tampung[]= array("PREMIUM",$pesanan["harga-premium"]);
        }
    }

    if ($pesanan["jumlah-reguler"] > 0) {
      $reguler = $pesanan["jumlah-reguler"];
      for ($i=0; $i < $reguler ; $i++) { 
          $tampung[] = array("REGULER",$pesanan["harga-reguler"]);
      }

    }

    return $tampung;
}

$idkonser = $_POST["idkonser"];
$query = "SELECT * FROM data_konser WHERE id_konser = $idkonser";
$result = mysqli_query($koneksi,$query);
$data = mysqli_fetch_assoc($result);

$tiket = pesanan($_POST);


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
      
      include 'style-pesan.css';
      
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
          <a href="my-ticket.html" class="menu-navbar">TIKETKU</a>
          <a href="tiket-page.html" class="menu-navbar">TIKET</a>
          <a href="home-page.html" class="menu-navbar">HOME</a>
        </div>
        <!-- Menu end -->
      </nav>
      <!-- Navbar end -->
    </header>


    <main>
      <div class="breadcrums">
        <h1>Form Data Diri</h1>
        <ul>
          <li><a href="tiket-page.php">Tiket</a></li>
          <li><a href="#"></a><span>&#11166;</span></li>
          <li><a href="detail-page.php?id_konser=<?php echo $idkonser; ?>">Detail </a></li>
          <li><a href="#"></a><span>&#11166;</span></li>
          <li><a href="pesan-page.php">Pesan </a></li>
           <!-- &#11208; -->
        </ul>
      </div>  
      <hr>  
            <p class="total">Harga Total : Rp. <?php echo $_POST["total-harga"] ?></p>
            <form class="formall">

              <div class="flex">
              <?php
              for ($i=0; $i < count($tiket); $i++) { ?>
                
                <table class="formtb">
                  <tr>
                  <td>
                    <p class="notiket">Tiket : <?php echo $i+1; ?></p>
                  </td>
                </tr>
                <tr>
                  <td> 
                    <h2 class="nama">Nama</h2>
                    <input type="text" class="boxnama" placeholder="Masukan Nama lengkap anda" size="40" height="50" required>
                  </td>
                  <td>
                        <h2 class="email-pesan">E-mail</h2>
                        <input type="email" class="boxemail" placeholder="Masukan email anda" size="40" required>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h2 class="email-pesan">Nama Konser</h2>
                        <input type="text" class="boxkonser" value="<?php echo $data["nama_konser"] ?>" size="40" readonly required>
                      </td>
                      <td>
                      <h2 class="tanggal">Tanggal Konser</h2>
                        <input type="text" class="boxtanggal" value="<?php echo $data["tgl_konser"] ?>" size="40" required readonly>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h2 class="email-pesan">Artis Konser</h2>
                        <input type="text" class="boxkonser" value="<?php echo $data["artis_konser"] ?>" size="40" readonly required>
                      </td>
                      <td>
                      <h2 class="email-pesan">Lokasi Konser</h2>
                        <input type="text" class="boxkonser" value="<?php echo $data["lokasi_konser"] ?>" size="40" readonly required>
                      </td>
                    </tr>
                  <tr>
                    <td>
                      <h2 class="notelpon">Nomor telepon</h2>
                      <input type="text" placeholder="Nomor HP" required size="40">
                    </td>
                    <td>
                      <h2 class="usia">Usia</h2>
                      <input type="number" class="age" placeholder="Usia" max="99" min="0" size="40" required>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h2 class="jenistiket">Jenis Tiket:</h2>
                      <input type="text" name="jenistiket" id="jenistiket" class="pilihantiket" value="<?php echo $tiket[$i][0]; ?>" size="40" readonly>
                    </td>
                    <td>
                      <h2 class="harga">Total harga:</h2>
                      <input type="text" name="harga" id="harga" class="totalharga" value="<?php echo $tiket[$i][1]; ?>" readonly>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <!-- <button type="reset" value="Reset" class="reset1">Reset</button>
                      <div class="kotak">
                        <button type="button" class="Cancel" onclick="location.href = 'detail-page.html' ">Cancel</button>
                        <button type="submit" name="submit" id="submit" value="Lanjutkan" class="isipesan" size="3" onclick="location.href = 'notif.html' ">Lanjutkan</button>
                      </div> -->
                      
                    </td>
                  </tr>
                </table>
                <?php } ?>
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
