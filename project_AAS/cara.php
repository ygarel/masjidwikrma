<?php
    require 'fungsi.php';
    
    if (isset($_POST["submit"])) {
        if (tambah($_POST) >0) {
            echo "
    <script>
      alert('data added successfully');
      document.location.href = 'index.php';
    </script>
    ";
        } else {
            echo "
    <script>
      alert('Failed to add data');
      document.location.href = 'index.php';
    </script>
    ";
        }
    } ?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
        <style>
            input{
                width : 500px;
            }

            .nav-item a{
                display: inline-block;
                margin-left: 10px;
            }
        </style>
    
        <title>input data siswa</title>
    </head>
    
    <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar fixed-top shadow" style="background-color: #E1EEDD;">
        <div class="container">
          <a class="navbar-brand" href="#">Input Data</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                <a class="nav-link active" aria-current="page" href="#">Cara Wakaf</a>
            </ul>
          </div>
        </div>
      </nav>
        <section style="background-color:#9BABB8; padding-top:80px;">
        <h1 style= "text-align: center; margin-bottom: 100px">Isi Forum Terlebih Dahulu-!</h1>
        <div class="container">
            <div class="row ">
                <div class="col d-flex justify-content-center">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="">Nama</label><br />
                            <input type="text" id="nama_donatur" name="nama_donatur"/><br />
                        </div>
                        <div class="mb-3">
                            <label for="">ID Donatur</label><br />
                            <input type="number" id="donatur_id" name="donatur_id"/><br />
                        </div>
                        <div class="mb-3">
                            <label for="">Kategori</label><br />
                            <input type="text" id="kategori" name="kategori"/><br />
                        </div>
                        <div class="mb-3">
                            <label for="">Jumlah Nominal</label><br />
                            <input type="text" id="nominal_barang" name="nominal_barang"/><br />
                        </div>
                        <div class="mb-3">
                            <label for="">Bukti Pembayaran</label><br />
                            <input type="file" id="foto" name="foto" required /><br />
                        </div>
                        <a href="index.php" class="btn btn primary"><button type="submit" name="submit">Kirim</button></a>
                    </form>
                </div>
            </div>
        </div>
        <section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        </svg>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    </body>
    
    </html>