<?php
require 'functions.php';

// cek ketika tombol tambah sudah diklik
if(isset($_POST['tambah'])) {
    
    // tambah data ke tabel mahasiswa
    if(tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'admin.php';
              </script>";
    }
    

}

  ?>
  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Kain</title>
  </head>
  <body>

    <div class="container mt-4">
      <h1>Tambah Kain</h1>
      <a href="admin.php" class="btn btn-primary">Kembali ke Daftar Kain</a>

    <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text" id="basic-addon1">Nama Kain</span>
           <input type="text" class="form-control" name="nama" required>
      </div>
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text" id="basic-addon1">Harga Kain</span>
           <input type="text" class="form-control" name="harga" required>
      </div>
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text" id="basic-addon1">Jenis Kain</span>
           <input type="text" class="form-control" name="jenis" required>
      </div>
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text" id="basic-addon1">Corak Kain</span>
           <input type="text" class="form-control" name="corak" required>
      </div>
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text" id="basic-addon1">Warna Kain</span>
           <input type="text" class="form-control" name="warna" required>
      </div>
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text" id="basic-addon1">Teknik Pembuatan</span>
           <input type="text" class="form-control" name="teknik_pembuatan" required>
      </div>
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text" id="basic-addon1">Cocok Untuk</span>
           <input type="text" class="form-control" name="cocok_untuk" required>
      </div>
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text" id="basic-addon1">Gramasi</span>
           <input type="text" class="form-control" name="gramasi" required>
      </div>
          <img src="../img/nophoto.jpg" class=" mx-2 rounded-2 img-preview" width="120" style="display: block;" id="img-preview">
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text" id="basic-addon1">gambar</span>
           <input type="file" class="form-control gambar" name="gambar" id="gambar" onchange="previewImage()">
      </div>
          <button type="submit" class="btn btn-primary mb-4" name="tambah">Tambah Data</button>
     </form>
     </div>
     </div>
     </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="../dist/js/script.js"></script>
  </body>
</html>