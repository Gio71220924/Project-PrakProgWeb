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
    <link rel="stylesheet" href="ticket-page-style.css" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Tiket G-VicxID</title>
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
          <a href="my-ticket.php" class="menu-navbar">MY TICKET</a>
          <a href="tiket-page.php" class="menu-navbar">TIKET</a>
          <a href="home-page.php" class="menu-navbar">HOME</a> 
        </div>
        <!-- Menu end -->
      </nav>
      <!-- Navbar end -->
    </header>

    <main>
        <div class="judul">
            <div class="title">
                <span>Daftar Tiket</span>
            </div>
            <div class="search">
                <select name="sort" class="select">
                  <option value="">---Sort By--</option>
                  <option value="genre"> Genre</option>
                  <option value="Kategori">Kategori</option>
                  <option value="asc">A - Z</option>
                  <option value="desc">Z - A</option>
                </select>
                <input type="text" class="input" placeholder="Search...." autofocus>
                <input type="button" value="Search" class="search-button" >
            </div>
        </div>
        <hr class="garis">
        <div class="daftar">
            <div class="card">
              <a href="detail-page.php">
                <div class="lokasi">GBK, Jakarta</div>
                <div class="img"><img src="images/tiket1.jpg" alt=""></div>
                <div class="deskripsi">
                    <h4>Avenged Sevenfold</h4>
                    <h4>-A7X-</h4>
                </div>
                <div class="price">
                    <div class="icon"><span class="material-symbols-outlined">
                        event
                    </span>25 - 5 - 2024</div>
                    <div class="harga">IDR 2.300.000</div>
                </div>
                <a href="detail-page.php"><div class="pesan"> Buy </div></a>
              </a>
            </div>
            <div class="card">
              <a href="detail-page1.html">
                <div class="lokasi">Pantai Lagoon, Ancol  </div>
                <div class="img"><img src="images/tiket2.jpg" alt=""></div>
                <div class="deskripsi">
                    <h4>Festival Kemenangan</h4>
                    <h4>-Vierratale-</h4>
                </div>
                <div class="price">
                    <div class="icon"><span class="material-symbols-outlined">
                        event
                        </span>14 - 4 - 2024</div>
                    <div class="harga">IDR 30.000</div>
                </div>
                <a href="detail-page1.html"><div class="pesan"> Buy </div></a>
              </a>
            </div>
            <div class="card">
                <div class="lokasi">GBK, Jakarta</div>
                <div class="img"><img src="images/tiket3.jpg" alt=""></div>
                <div class="deskripsi">
                    <h4>TREASURE REBOOT</h4>
                    <h4>-TREASURE-</h4>
                </div>
                <div class="price">
                    <div class="icon"><span class="material-symbols-outlined">
                        event
                        </span>29 - 6 - 2024</div>
                    <div class="harga">IDR 500.000</div>
                </div>
                <a href="#"><div class="pesan"> Buy </div></a>
            </div>
            <div class="card">
                <div class="lokasi">GOR UNY, Yogyakarta</div>
                <div class="img"><img src="images/tiket4.jpg" alt=""></div>
                <div class="deskripsi">
                    <h4>DEFRAG</h4>
                    <h4>-HINDIA-</h4>
                </div>
                <div class="price">
                    <div class="icon"><span class="material-symbols-outlined">
                        event
                        </span>21 - 4 - 2024</div>
                    <div class="harga">IDR 175.000</div>
                </div>
                <a href="#"><div class="pesan"> Buy </div></a>
            </div>
            <div class="card">
                <div class="lokasi">Kemayoran, Jakarta</div>
                <div class="img"><img src="images/tiket5.jpg" alt=""></div>
                <div class="deskripsi">
                    <h4>Java Jazz Festival</h4>
                    <h4>-</h4>
                </div>
                <div class="price">
                    <div class="icon"><span class="material-symbols-outlined">
                        event
                        </span>24 - 5 - 2024</div>
                    <div class="harga">IDR 850.000</div>
                </div>
                <a href="#"><div class="pesan"> Buy </div></a>
            </div>
            <div class="card">
                <div class="lokasi">Carnaval Ancol, Jakarta</div>
                <div class="img"><img src="images/tiket6.jpg" alt=""></div>
                <div class="deskripsi">
                    <h4>Lamb of God</h4>
                    <h4>-Hammersonic-</h4>
                </div>
                <div class="price">
                    <div class="icon"><span class="material-symbols-outlined">
                        event
                        </span>4 - 5 - 2024</div>
                    <div class="harga">IDR 500.000</div>
                </div>
                <a href="#"><div class="pesan"> Buy </div></a>
            </div>
            <div class="card">
                <div class="lokasi">Bengkel Space, Jakarta</div>
                <div class="img"><img src="images/tiket7.jpg" alt=""></div>
                <div class="deskripsi">
                    <h4>The Drums Asia Tour</h4>
                    <h4>-The Drums-</h4>
                </div>
                <div class="price">
                    <div class="icon"><span class="material-symbols-outlined">
                        event 
                        </span>9 - 5 - 2024</div>
                    <div class="harga">IDR 500.000</div>
                </div>
                <a href="#"><div class="pesan"> Buy </div></a>
            </div>
            <div class="card">
              <div class="lokasi">Ancol Beach, Jakarta</div>
              <div class="img"><img src="images/tiket8.jpg" alt=""></div>
              <div class="deskripsi">
                  <h4>Niall Horan</h4>
                  <h4>-Niall Horan-</h4>
              </div>
              <div class="price">
                  <div class="icon"><span class="material-symbols-outlined">
                      event 
                      </span>11 - 5 - 2024</div>
                  <div class="harga">IDR 1.200.000</div>
              </div>
              <a href="#"><div class="pesan"> Buy </div></a>
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

</body>
</html>