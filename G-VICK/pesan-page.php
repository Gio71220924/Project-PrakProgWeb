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
          <a href="my-ticket.php" class="menu-navbar">TIKETKU</a>
          <a href="tiket-page.php" class="menu-navbar">TIKET</a>
          <a href="home-page.php" class="menu-navbar">HOME</a>
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
          <li><a href="detail-page.php">Detail </a></li>
          <li><a href="#"></a><span>&#11166;</span></li>
          <li><a href="pesan-page.php">Pesan </a></li>
           <!-- &#11208; -->
        </ul>
      </div>  
      <hr>
        
      <div class="tikettiket">
          <h1 class="judultiket">Tiket 1</h1>
          <h1 class="judultiket2">Tiket 2</h1>

      </div>
      <div class="form1besar">
        <div class="form1a">
            <form class="formall">

              <!-- <form  class="kosong"> -->
                
                <h2 class="nama">Nama</h2>
                
                <input type="text" class="boxnama" placeholder="Masukan Nama lengkap anda" size="40" height="50" required>
                
                <h2 class="email-pesan">E-mail</h2>
                <input type="email" class="boxemail" placeholder="Masukan email anda" size="40" required>
                
                <h2 class="email-pesan">Nama Konser</h2>
                <input type="text" class="boxkonser" value="Avenged Sevenfold" size="40" disabled required>
                
                <h2 class="tanggal">Tanggal Konser</h2>
                <input type="date" class="boxtanggal" value="2024-05-25" required disabled>
                
              </div>
              
              <div class="form1b">
                  <h2 class="notelpon">Nomor telepon</h2>

                  <div class="kotak2">
                    <div class="nomor2">+62</div>
                    <input type="text" placeholder="Nomor HP" required>
                </div>
            
      
                <h2 class="usia">Usia</h2>
                  <input type="number" class="age" placeholder="Usia" max="99" min="0" size="40" required>
                  
                  <h2 class="jenistiket">Jenis Tiket:</h2>
                  <input type="text" name="jenistiket" id="jenistiket" class="pilihantiket" value="VVIP" size="40" disabled> 
                  
                  <h2 class="harga">Total harga:</h2>
                  <input type="text" name="harga" id="harga" class="totalharga" value="Rp 5.000.000" disabled>
                    
                  <input type="reset" value="Reset" class="reset1">
              </div>
              
              <div class="form2a">
                <!-- <form class="kosong2"> -->
                  <h2 class="nama">Nama</h2>
                  <input type="text" class="boxnama" placeholder="Masukan Nama lengkap anda" size="40" required>
                  
                  <h2 class="email-pesan">E-mail</h2>
                  <input type="email" class="boxemail" placeholder="Masukan email anda" size="40" required>
                  
                  <h2 class="email-pesan">Nama Konser</h2>
                  <input type="text" class="boxkonser" value="Avenged Sevenfold" size="40"  disabled required>
                  
                  <h2 class="tanggal">Tanggal Konser</h2>
                  <input type="date" class="boxtanggal" value="2024-05-25" required disabled >
                </div>
                
                
                <div class="form2b">
                  <h2 class="notelpon">Nomor telepon</h2>
                  
                  <div class="kotak">
                    <div class="nomor">+62</div>
                    <input type="text" placeholder="Nomor HP" required>
                </div>
            

                  <h2 class="usiaa">Usia</h2>
                  <input type="number" class="age" placeholder="Usia" max="99" min="0" size="40" required>
                  
                  <h2 class="jenistiket">Jenis Tiket:</h2>
                  <input type="text" name="jenistiket" id="jenistiket" class="pilihantiket" value="VIP" size="40" disabled> 
                  
                  <h2 class="harga">Total harga:</h2>
                  <input type="text" name="harga" id="harga" class="totalharga" value="Rp 4.000.000" disabled>
                
                    <input type="reset" name="reset" id="reset" value="Reset" class="reset2" >              
                  
                <!-- </form> -->
              </div>
              
            </div>

      <div class="kotak">
        <button type="button" class="Cancel" onclick="location.href = 'detail-page.php' ">Cancel</button>
        <button type="submit" name="submit" id="submit" value="Lanjutkan" class="isipesan" size="3" onclick="location.href = 'notif.html' ">Lanjutkan</button>
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
