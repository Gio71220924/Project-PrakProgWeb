<?php
session_start();
if (!isset($_SESSION["username"])) {
  echo '<script>var x = window.confirm("Anda harus login terlebih dahulu!");
  if (x) {
    location.replace("login.php");
  } else {
    location.replace("home-page.php");
  }</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style-detail.css" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <title>Website Pemesanan Tiket G-VicxID</title>
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
          <a href="#" class="menu-navbar" id="logout" onclick="logout()">LOGOUT</a>
          <a href="my-ticket.html" class="menu-navbar">TIKETKU</a>
          <a href="tiket-page.html" class="menu-navbar">TIKET</a>
          <a href="home-page.php" class="menu-navbar">HOME</a>
        </div>
        <!-- Menu end -->
      </nav>
      <!-- Navbar end -->
    </header>

    <main>
      <div class="kotak-detail">
        <div class="judul-halaman">
          <!-- <div class="tombol-back-detail">
              <input type="button" value="Back" onclick="location.href = 'tiket-page.html' "></input>
            </div> -->
          <h1>DETAIL TIKET</h1>
          <div class="breadcrums">
            <ul>
              <li><a href="tiket-page.html">Tiket</a></li>
              <li><a href="#"></a><span>&#11166;</span></li>
              <li><a href="detail-page.html">Detail </a></li>
              <!-- &#11208; -->
            </ul>
          </div>
        </div>
        <hr />
        <div class="gambar-konser-detail">
          <img src="images/gambar-detail.jpg" alt="" />
        </div>
        <div class="detail-kotak">
          <table>
            <tr>
              <td colspan="2">
                <p class="judul-detail">This is Avenged Sevenfold</p>
                <p class="penyanyi-detail">Avenged Sevenfold</p>
              </td>
            </tr>
            <tr>
              <td>
                <div class="deskripsi-detail">
                  <table>
                    <tr>
                      <td>Deskripsi</td>
                    </tr>
                    <tr>
                      <td>
                        <p>
                          Avenged Sevenfold (disingkat A7X) adalah band heavy metal Amerika Serikat dari Huntington Beach, California, dibentuk pada tahun 1999. Band ini saat ini formasi terdiri dari vokalis M. Shadows, gitaris ritme Zacky
                          Vengeance, gitaris utama Synyster Gates, bassis Johnny Christ, dan drummer Brooks Wackerman.
                        </p>
                      </td>
                    </tr>
                  </table>
                </div>
              </td>
              <td>
                <div class="deskripsi-singkat">
                  <table>
                    <tr>
                      <td><img src="images/icon-lagu.png" alt="" /></td>
                      <td>Heavy Metal Band</td>
                    </tr>
                    <tr>
                      <td><img src="images/icon-lokasi.png" alt="" /></td>
                      <td>Gelora Bung Karno, Jakarta, Indonesia</td>
                    </tr>
                    <tr>
                      <td><img src="images/icon-calendar.png" alt="" /></td>
                      <td>Sabtu, 25 Mei 2024 : 19.00 WIB</td>
                    </tr>
                  </table>
                </div>
              </td>
            </tr>
          </table>
        </div>
        <div class="gambar-kursi">
          <table>
            <tr>
              <td rowspan="5">
                <table>
                  <tr>
                    <td><img src="images/vip.png" alt="" /></td>
                  </tr>
                  <tr>
                    <td>Seating Plan</td>
                  </tr>
                </table>
              </td>
              <td>VVIP</td>
              <td>Rp 5.000.000,00</td>
              <td>
                <form>
                  <label for="jumlah-vvip">Jumlah: </label>
                  <input type="number" name="jumlah-vvip" id="jumlah-vvip" min="0" placeholder="0" />
                </form>
              </td>
              <td>stok: 13</td>
            </tr>
            <tr>
              <td>VIP</td>
              <td>Rp 4.000.000,00</td>
              <td>
                <form>
                  <label for="jumlah-vvip">Jumlah: </label>
                  <input type="number" name="jumlah-vip" id="jumlah-vip" min="0" placeholder="0" />
                </form>
              </td>
              <td>stok: 23</td>
            </tr>
            <tr>
              <td>GOLD</td>
              <td>Rp 3.000.000,00</td>
              <td>
                <form>
                  <label for="jumlah-vvip">Jumlah: </label>
                  <input type="number" name="jumlah-gold" id="jumlah-gold" min="0" placeholder="0" />
                </form>
              </td>
              <td>stok: 43</td>
            </tr>
            <tr>
              <td>SILVER</td>
              <td>Rp 2.300.000,00</td>
              <td>
                <form>
                  <label for="jumlah-vvip">Jumlah: </label>
                  <input type="number" name="jumlah-silver" id="jumlah-silver" min="0" placeholder="0" />
                </form>
              </td>
              <td>stok: 38</td>
            </tr>
            <tr>
              <td>
                <form>
                  <label for="total-harga">Total harga </label>
                </form>
              </td>
              <td>
                <form>
                  <input type="text" id="total-harga" name="total-harga" disabled placeholder="Rp 5.300.000,00" />
                </form>
              </td>
              <td colspan="2">
                <a href="pesan-page.html"><button class="button">Beli Tiket</button></a>
              </td>
            </tr>
          </table>
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
