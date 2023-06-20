<?php 
    require 'fungsi.php';
    $donors = mysqli_query($conn, "SELECT * FROM infaq");
    

    if(isset($_POST["keyword"])){
        $donors = cari($_POST["keyword"]);
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/a">
        <title>Masjid SMK Wikrama Bogor</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
    <nav>
        <img src="img/logo-wk.png" class="logo">
        <p><b>SMK WIKRAMA<br>BOGOR</b></p><br>
            <ul>
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#Cara Waqaf">Cara Waqaf</a></li>
                <li><a href="#data">Data Wakaf</a></li>
            </ul>
    </nav>
    <div class="header">
        <div class="title">
            <h3 id="beranda">Masjid SMK Wikrama Bogor</h3>
        </div>
            <h1>Mari Tingkatkan</h1>
            <h1 class="title1">Keimanan Semua</h1>
            <h1>Masyarakat SMK Wikrama Bogor</h1>
    </div>
        <a class="btn" href="cara.php">Beri Bantuan Shodaqoh</a>
            <div class="img">
                <img src="https://i.pinimg.com/564x/19/8a/de/198adec294a29242fffbaa05fa081f85.jpg">
            </div>
            <div class="iconimg">
                <img src="img/logo-wk.png">
            </div>    
            <div class="logo1">
                <img src="img/Leaf.png">
                <b>Lingkungan<br>Terjaga.</b>
            </div>
            <div class="logo2">
                <img src="img/maximize.png">
                <b>Kapasitas<br>Besar.</b>
            </div>
            <div class="logo3">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(242, 153, 74, 1);transform: ;msFilter:;"><path d="M19 2.01H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.998 5 19.815 5 19.01c0-.101.009-.191.024-.273.112-.575.583-.717.987-.727H20c.018 0 .031-.009.049-.01H21V4.01c0-1.103-.897-2-2-2zm0 14H5v-11c0-.806.55-.988 1-1h7v7l2-1 2 1v-7h2v12z"></path></svg>
                <box-icon name='book-bookmark' color='#f2994a' ></box-icon>
                <b>Al-Quran<br>Gratis.</b>
            </div>

                <?php
                    $total_dana = 0;
                    $tota_harus = 50000.000;
                    $query = "SELECT nominal_barang FROM infaq";
                    $result = mysqli_query($conn, $query);
    
                    while ($row = mysqli_fetch_assoc($result)){
                    $total_dana += $row['nominal_barang'];
                    }
                    $format_nominal = number_format($total_dana, 3, '.', '.');
                    $bar = ($total_dana / $tota_harus) * 100;
                ?>
        </div>
           


            <div class="totalitas" style="display: flex; justify-content: center; padding-top: 3rem; margin-top: 200px;">
    <div class="cardana" style="width: 95%; display: flex; justify-content: center;  padding-top: 3rem;">
      <div class="danac-main" style="background-color: white; width: 100%; box-shadow: 7px 8px 60px rgba(0, 0, 0, 0.1);">
        <div class="danac-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); grid-gap: 10px; padding: 0 20px; max-width: 100%; justify-items: center;">
          <section class="danac-1">
            <h3 style="font-size: 20px; text-align: center; color: #555;">Total Target Dana</h3>
            <br>
            <h1 style="font-size: 35px; text-align: center; color: black;">Rp.50.000.000,00</h1>
            <br><br>
          </section>
          <section class="danac-2">
            <h3 style="font-size: 20px; text-align: center; color: #555;">Total Dana Terkumpul</h3>
            <br>
            <h1>
              <?= '<h1 style="font-size: 35px; text-align: center; color: black;"> Rp. ' . $format_nominal . ',00</h1>'; ?>
            </h1>
            <br><br>
          </section>
          <section class="danac-3">
            <h3 style="font-size: 20px; text-align: center; color: #555;">Total Donatur</h3>
            <br>
            <h1 style="font-size: 25px; text-align: center; color: black;">
              <div class="naon">
                <?php $angka = 0; ?>
                <?php foreach ($donors as $donor) : ?>
                  <?php $angka++ ?>
                <?php endforeach; ?>
                <h1> <?= $angka; ?></h1>
              </div>
            </h1>
            <br>
          </section>
        </div>
        <div style="display: flex; justify-content: center">
          <div class="progress-bar" style="width: 50%; background-color: #ddd; height: 30px; overflow: hidden; box-shadow: 7px 8px 60px rgba(0, 0, 0, 0.1);">
            <div class="progress" style="background-color: #1F3984; width: <?= $bar ?? 0 ?>%;"></div>
            <span class="progress-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;"></span>
          </div>
        </div>
        <br>
        <h1>
          <?= '<h1 style="color: black; display: flex; justify-content: center;">' . $bar  . '%</h1>'; ?>
        </h1>
        <br><br><br>
        <div class="scroll">
                <marquee behavior="scroll" direction="left" scrollamount="20" style=" width: 100%; white-space: nowrap;overflow: hidden;">
                    <?php foreach ($donors as $donor) { ?>
                    <h3 style="display: inline-block; margin: 0; padding-right: 10px; color: #FFFFFF;">
                        <?= $donor["nama_donatur"]; ?>
                        <h3 style="display: inline-block; margin: 0; padding-right: 10px; color:#FFFFFF;">-</h3>
                    </h3>
                    <h3 style="display: inline-block; margin: 0; padding-right: 50px; color: yellow;">
                        <?= $donor["kategori"]; ?>
                        Rp. <?= number_format($donor['nominal_barang'], 3, '.', ','); ?>
                    </h3>
                <?php } ?>
          </marquee>
            </div>
      </div>
    </div>
  </div>
  <br>
         
    
    <div class="card-title">
        <h1>Manfaat Wakaf, <span> donors dan Shodaqoh.</h1>
        <p>Berikut manfaat dari wakaf, infaq dan shodaqoh</p>
    </div>
        
        <div class="container">
           <img src="https://i.pinimg.com/474x/5a/62/3c/5a623c22577127cfacbfa32c8516b474.jpg">
                <div class="card1">
                    <h2>Menjadikan Hati Lebih </h2>
                    <p>Kami Memberikan harga yang terbaik dibandingkan dengan kompetitor kami</p>
                </div>
                <div class="card">
                    <h2>Terbukanya Pintu Rezeki</h2>
                    <p>Allah SWT akan membuka pintu rezeki dari arah yang tidak dikira sebelumnya.</p>
                </div>
                <div class="card1">
                    <h2>Menjauhkan Dari Bahaya</h2>
                    <p>Rasulullah SAW pernah bersabda: "Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah."</p>
                </div>
                <div class="card">
                    <h2>Pahala Yang Tak Terputus</h2>
                    <p>Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api neraka.</p>
                </div>
            </div>
        
        <div id="Cara Waqaf" class="card-title"> 
            <h1>Cara Melakukan, <span>Waqaf, Infaq dan Shodaqoh</h1>
            <p>Berikut adalah Cara melakukan wakaq, infaq shodaqoh untuk membantu pembangunan masjid besar SMK Bogor</p>
        </div>   
            
        <div class="card1">
            <h2>1. Isi Form Data Diri </h2>
            <p>Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.</p>
        </div>
        <div class="card">
            <h2>2. Isikan Nominal Shodaqoh</h2>
            <p>Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.</p>
        </div>
        <div class="card1">
            <h2>3. Upload Bukti Pembayaran</h2>
            <p>Pilih metode pembayaran dan upload bukti pembayaranya.</p>
        </div>
        <div class="card">
            <h2>4. Verifikasi Pembayaran</h2>
            <p>Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</p>
        </div>

            <h1 id="data" class="tabletitle">Data Waqaf</h1>

        <table border="1" class="datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Id Donatur</th>
                <th>Kategori</th>
                <th>Nominal/Barang</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php $i = 1; ?>
                <?php foreach ($donors as $donor) : ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $donor["nama_donatur"] ?></td>
                <td><?= $donor["donatur_id"] ?></td>
                <td><?= $donor["kategori"] ?></td>
                <td><?= number_format ($donor['nominal_barang'],'3', '.', ','); ?></td>
              </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h1 class="title-gallery">Gallery <span> Masjid Besar SMK <br> Wikrama Bogor</h1>
        <p class="sub-title-gallery">Berikut Gallery Masjid SMK Wikrama Bogor.</p>
    
        <div class="gallery">
            <div class="gallery-container">
                <div class="gallery-box">
                    <img src="https://i.pinimg.com/564x/c9/4c/be/c94cbea7ea0fda8ab664f5690c8e22fc.jpg">
                    <div class="gallery-layer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: rotate(180deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>
                        <a href="#"><box-icon name='arrow-back' rotate='180' color='#ffffff' ></box-icon></a>
                        <h4>Buka Gallery</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="gallery-container">
                <div class="gallery-box">
                    <img src="https://i.pinimg.com/564x/e2/13/46/e213469d45f7bc126970806eb17dc97b.jpg">
                    <div class="gallery-layer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: rotate(180deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>
                        <a href="#"><box-icon name='arrow-back' rotate='180' color='#ffffff' ></box-icon></a>
                        <h4>Buka Gallery</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="gallery-container">
                <div class="gallery-box">
                    <img src="https://i.pinimg.com/236x/28/38/5c/28385cbfe4425ace81fc8ef3016540a7.jpg">
                    <div class="gallery-layer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: rotate(180deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>
                        <a href="#"><box-icon name='arrow-back' rotate='180' color='#ffffff' ></box-icon></a>
                        <h4>Buka Gallery</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="gallery-container">
                <div class="gallery-box">
                    <img src="https://i.pinimg.com/236x/3a/2f/43/3a2f435f00158b8f7b2e41f9cbc43d2f.jpg">
                    <div class="gallery-layer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: rotate(180deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>
                        <a href="#"><box-icon name='arrow-back' rotate='180' color='#ffffff' ></box-icon></a>
                        <h4>Buka Gallery</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="gallery-container">
                <div class="gallery-box">
                    <img src="https://i.pinimg.com/236x/b4/9d/3f/b49d3f38d69d3a0a2a778e09a126956e.jpg">
                    <div class="gallery-layer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: rotate(180deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>
                        <a href="#"><box-icon name='arrow-back' rotate='180' color='#ffffff' ></box-icon></a>
                        <h4>Buka Gallery</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="gallery-container">
                <div class="gallery-box">
                    <img src="https://i.pinimg.com/564x/48/6f/b5/486fb57373ba279a88aa8732c7031d70.jpg">
                    <div class="gallery-layer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: rotate(180deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>
                        <a href="#"><box-icon name='arrow-back' rotate='180' color='#ffffff' ></box-icon></a>
                        <h4>Buka Gallery</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>        
    </div>
    <div class="clearfix"></div>
          <footer class="footer-main">
            <p><img src="img/logo-wk.png" class="logo">SMK WIKRAMA BOGOR</p>
              <div class="footer-grid">   
                <section class="footer-2">
                   <h4>Alamat</h4>
                   <p>Jl. Raya Wangun <br>
                       Kelurahan Sindangsari <br>
                       Bogor Timur 16720</p>
                       <hr>
                   <h4>Telepon</h4>
                   <p>0251-8242411 / <br> 082221718035(Whatsapp)</p><hr>
                 </section>
                    <section class="footer-1">
                   <b>Tentang RPL</b>   
                    <ul>
                        <li>Sejarah</li>
                        <li>Kompetensi</li>
                        <li>Profesi</li>
                        <li>Kerjasama</li>
                    </ul>
                    </section>
                   <section class="footer-3">
                     <div class="input-container">
                       <div class="input-column">
                        <h3>Ketik Pesan</h3>
                         <input type="text" name="input1" placeholder="Nama" style="height: 25px; width: 250px; margin-bottom: 10px;">
                       </div>
                       <div class="input-column">
                         <input type="text" name="input2" placeholder="Email" style="height: 25px; width: 250px; margin-bottom: 10px;">
                       </div>
                       <div class="input-column">
                         <input type="text" name="input3" placeholder="Pesan Anda" style="height: 100px; width: 250px; margin-bottom: 10px;">
                       </div>
                       <br>
                       <button name="submit" style="width: 75px">Kirim</button>
                       </div>
                     </div>
                </section>
            </div>
      </div>
    </footer>
</body>
</html>

