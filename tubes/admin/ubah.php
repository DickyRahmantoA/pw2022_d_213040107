<?php
require 'functions.php';

// Query data mahasiswa berdasarkan id
$id = $_GET["id"];
$k = query("SELECT * FROM kain WHERE id = $id")[0];

// cek ketika tombol ubah sudah diklik
if(isset($_POST['ubah'])) {
    
    // ubah data di tabel mahasiswa
    if(ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah!');
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

    <title>Ubah Data Kain</title>
  </head>
  <body>

    <div class="container">
      <h1>Ubah Data Kain</h1>
      <a href="admin.php" class="btn btn-primary">Kembali ke Daftar Kain</a>

      <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $k['id']; ?>">
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text">Nama Kain</span>
           <input type="text" class="form-control" id="nama" name="nama" value="<?= $k['nama']; ?>" required>
      </div>
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text">Harga Kain</span>
           <input type="text" class="form-control" id="harga" name="harga" value="<?= $k['harga']; ?>" required>
      </div>
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text">Jenis Kain</span>
           <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $k['corak']; ?>" required>
      </div>
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text">Corak Kain</span>
           <input type="text" class="form-control" id="corak" name="corak" value="<?= $k['corak']; ?>" required>
      </div>
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text">Warna Kain</span>
           <input type="text" class="form-control" id="warna" name="warna" value="<?= $k['warna']; ?>" required>
      </div>
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text">Teknik Pembuatan</span>
           <input type="text" class="form-control" id="teknik" name="teknik_pembuatan" value="<?= $k['teknik_pembuatan']; ?>" required>
      </div>
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text">Cocok Untuk</span>
           <input type="text" class="form-control" id="cocok" name="cocok_untuk" value="<?= $k['cocok_untuk']; ?>" required>
      </div>
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text">Gramasi</span>
           <input type="text" class="form-control" id="gramasi" name="gramasi" value="<?= $k['gramasi']; ?>" required>
      </div>
          <img src="../img/<?= $k['gambar']; ?>" class=" mx-2 rounded-2 img-preview" width="120" style="display: block;" id="img-preview">
           <input type="hidden" name="gambar_lama" value="<?= $k['gambar']; ?>">
      <div class="input-group mt-4 mb-3">
           <span class="input-group-text">Gambar</span>
           <input type="file" class="form-control gambar" name="gambar" id="gambar" onchange="previewImage()">
      </div>

                  <button type="submit" class="btn btn-primary" name="ubah">Ubah Data</button>
              </form>
          </div>
      </div>

    </div>
    <script src="../dist/js/script.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
