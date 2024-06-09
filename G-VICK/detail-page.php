<?php
require 'koneksi.php';
session_start();
if (!isset($_SESSION["username"])) {
  echo '<script>var x = window.confirm("Anda harus login terlebih dahulu!");
  if (x) {
    location.replace("login.php");
  } else {
    location.replace("home-page.php");
  }</script>';
}

$id = $_GET["id_konser"];

$query = "SELECT * FROM data_konser WHERE id_konser = $id";
$result = mysqli_query($koneksi,$query);
$hasil = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style-detail.css" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link rel="icon" type="images/icon.png" href="images/icon.png">
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
          <a href="tiket-saya.php" class="menu-navbar">TIKETKU</a>
          <a href="tiket-page.php" class="menu-navbar">TIKET</a>
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
              <li><a href="tiket-page.php">Tiket</a></li>
              <li><a href="#"></a><span>&#11166;</span></li>
              <li><a href="">Detail </a></li>
              <!-- &#11208; -->
            </ul>
          </div>
        </div>
        <hr />
        <div class="gambar-konser-detail">
          <img src="images/<?php echo $hasil["gambar_konser"]; ?>" alt="" />
        </div>
        <div class="detail-kotak">
          <table>
            <tr>
              <td colspan="2">
                <p class="judul-detail"><?php echo $hasil["nama_konser"]; ?></p>
                <p class="penyanyi-detail"><?php echo $hasil["artis_konser"] ?></p>
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
                        <?php echo $hasil["detail_konser"] ?>
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
                      <td><?php echo $hasil["genre"] ?></td>
                    </tr>
                    <tr>
                      <td><img src="images/icon-lokasi.png" alt="" /></td>
                      <td><?php echo $hasil["lokasi_konser"] ?></td>
                    </tr>
                    <tr>
                      <td><img src="images/icon-calendar.png" alt="" /></td>
                      <td><?php echo $hasil["tgl_konser"] ?></td>
                    </tr>
                  </table>
                </div>
              </td>
            </tr>
          </table>
        </div>
        <div class="gambar-kursi">
          <table>
            <form method="post" action="pesan-page.php">
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
              <td id="harga-vvip"><?php echo $hasil["vvip"] ?></td>
              <td>
                <form>
                  <input type="hidden" name="idkonser" value="<?php echo $hasil["id_konser"] ?>">
                  <label for="jumlah-vvip">Jumlah: </label>
                  <input type="number" name="jumlah-vvip" id="jumlah-vvip" min="0" max="<?php echo $hasil["stock_vvip"] ?>" <?php if($hasil["stock_vvip"]==0){echo "readonly";} else {echo "";}?> placeholder="0" onkeyup="totalvvip()" onchange="totalvvip()"/>
                  <input type="hidden" name="harga-vvip" value="<?php echo $hasil["vvip"] ?>">
                  
            
              </td>
              <td>stok: <?php echo $hasil["stock_vvip"] ?></td>
            </tr>
            <tr>
              <td>VIP</td>
              <td id="harga-vip"><?php echo $hasil["vip"] ?></td>
              <td>
                
                  <label for="jumlah-vvip">Jumlah: </label>

                  <input type="number" name="jumlah-vip" id="jumlah-vip" min="0" max="<?php echo $hasil["stock_vip"] ?>" <?php if($hasil["stock_vip"]==0){echo "readonly";} else {echo "";}?> placeholder="0" onkeyup="totalvip()" onchange="totalvip()"/>
                  <input type="hidden" name="harga-vip" value="<?php echo $hasil["vip"] ?>">
                 
                
              </td>
              <td>stok: <?php echo $hasil["stock_vip"] ?></td>
            </tr>
            <tr>
              <td>PREMIUM</td>
              <td id="harga-premium"><?php echo $hasil["premium"] ?></td>
              <td>
                  <label for="jumlah-vvip">Jumlah: </label>
                  <input type="number" name="jumlah-premium" id="jumlah-premium" min="0" max="<?php echo $hasil["stock_premium"] ?>" <?php if($hasil["stock_premium"]==0){echo "readonly";} else {echo "";}?> placeholder="0" onkeyup="totalpremium()" onchange="totalpremium()" />
                  <input type="hidden" name="harga-premium" value="<?php echo $hasil["premium"] ?>">
                  
              </td>
              <td>stok: <?php echo $hasil["stock_premium"] ?></td>
            </tr>
            <tr>
              <td>REGULER</td>
              <td id="harga-reguler"><?php echo $hasil["reguler"] ?></td>
              <td>
             
                  <label for="jumlah-vvip">Jumlah: </label>
                  <input type="number" name="jumlah-reguler" id="jumlah-reguler" min="0" max="<?php echo $hasil["stock_reguler"] ?>" <?php if($hasil["stock_reguler"]==0){echo "readonly";} else {echo "";}?> placeholder="0" onkeyup="totalreguler()" onchange="totalreguler()"/>
                  <input type="hidden" name="harga-reguler" value="<?php echo $hasil["reguler"] ?>">
                
              </td>
              <td>stok: <?php echo $hasil["stock_reguler"] ?></td>
            </tr>
            <tr>
              <td>
               
                  <label for="total-harga">Total harga </label>
                
              </td>
              <td>
             
                  Rp. <input type="text" id="total-harga" name="total-harga" readonly value="0"/>
    
                </td>
                <td colspan="2">
                  <button type="submit" class="button" onclick="cekKosong(event)">Beli Tiket</button>
                </td>
              </tr>
            </form>
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
        <form class="form" onsubmit="return kontak()">
          <textarea name="5" id="textarea" cols="30" rows="6" placeholder="Masukan pesan anda"></textarea>
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

    function kontak(){
      if(document.getElementById("textarea").value ==""){
        alert("Diisi dulu form kontak nya ya!");
        return false;
      }else{
        alert("Terimakasih telah menghubungi kami!");
        return true;
      }
    }


    function vvip(){
      var jumlahvvip = document.getElementById("jumlah-vvip").value;
      var hargavvip = document.getElementById("harga-vvip").innerText;
      if (jumlahvvip.length == 0) {
        return 0;
      }else{
        return parseInt(jumlahvvip) * parseInt(hargavvip);
      }
    }

    function vip(){
      var jumlahvip = document.getElementById("jumlah-vip").value;
      var hargavip = document.getElementById("harga-vip").innerText;
      if (jumlahvip.length == 0) {
        return 0;
      }else{
        return parseInt(jumlahvip) * parseInt(hargavip);
      }
    }

    function premium(){
      var jumlahpremium = document.getElementById("jumlah-premium").value;
      var hargapremium = document.getElementById("harga-premium").innerText;
      if (jumlahpremium.length == 0) {
        return 0;
      }else{
        return parseInt(jumlahpremium) * parseInt(hargapremium);
      }
    }

    function reguler(){
      var jumlahreguler = document.getElementById("jumlah-reguler").value;
      var hargareguler = document.getElementById("harga-reguler").innerText;
      if (jumlahreguler.length == 0) {
        return 0;
      }else{
        return parseInt(jumlahreguler) * parseInt(hargareguler);
      }
    }
   
   function totalvvip(){
      var totalharga = document.getElementById("total-harga");
      totalharga.setAttribute("value", vvip()+vip()+premium()+reguler());
   }

   function totalvip(){
      var totalharga = document.getElementById("total-harga");
      totalharga.setAttribute("value", vvip()+vip()+premium()+reguler());
   }
   function totalpremium(){
      var totalharga = document.getElementById("total-harga");
      totalharga.setAttribute("value", vvip()+vip()+premium()+reguler());
   }
   
   function totalreguler(){
      var totalharga = document.getElementById("total-harga");
      totalharga.setAttribute("value", vvip()+vip()+premium()+reguler());
   }

   function cekKosong(event){
    if ((document.getElementById("jumlah-vvip").value==0)&&(document.getElementById("jumlah-vip").value==0)&&(document.getElementById("jumlah-premium").value==0)&&(document.getElementById("jumlah-reguler").value==0)) {
      alert("Sebelum beli tiket pastikan ada tiket yang ingin dibeli!");
      event.preventDefault();
    }
   }
    
  </script>
</html>
