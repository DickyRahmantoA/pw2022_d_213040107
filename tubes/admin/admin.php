<?php 
require 'functions.php';
$kain = query("SELECT * FROM kain");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $kain = cari($_POST["keyword"]);
}

if(isset($_GET["nama"])) {
  $kain = query("SELECT * FROM kain ORDER BY nama ASC");
}
if(isset($_GET["nama2"])) {
  $kain = query("SELECT * FROM kain ORDER BY nama DESC");
}
if(isset($_GET["jenis-kain"])) {
  $kain = query("SELECT * FROM kain ORDER BY jenis ASC");
}
if(isset($_GET["jenis-kain2"])) {
  $kain = query("SELECT * FROM kain ORDER BY jenis DESC");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kainin.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
      @media print {
        .logout, .tambah, .form-cari, .aksi{
          display: none;
        }
      }
    </style>
  </head>
  <body>
  <div class="container mt-5">
  <div class="container mt-5">
      <h1 class="text-center mt-5 mb-5">Daftar Kain di Kainin.id</h1>
      <form action="" method="GET">
      <a href="tambah.php"  class="btn btn-outline-success tambah">Tambah Data</a>
      <a href="../print/cetak.php" target="_blank" class="btn btn-outline-success">Cetak</a>
      <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Urutkan Nama A-Z
          </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <button class="dropdown-item" type="submit" name="nama">A-Z</button>
            <button class="dropdown-item" type="submit" name="nama2">Z-A</button>
          </ul>
        </div>
      <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Urutkan Nama Jenis A-Z
          </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <button class="dropdown-item" type="submit" name="jenis-kain">A-Z</button>
            <button class="dropdown-item" type="submit" name="jenis-kain2">Z-A</button>
          </ul>
        </div>
        <a href="admin.php" class="btn btn-outline-success" type="submit">Reset Pengurutan</a>
        <a class="btn btn-outline-success logout" href="../logout.php">keluar</a>
      </div>
      </form>
      <form action="" method="POST" class="mt-4 form-cari">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="keyword" placeholder="Cari Kain Disini.." autocomplete="off" id="keyword"> 
          <button class="tombol-cari btn btn-outline-success" type="submit" name="cari" id="tombol-cari">Cari</button>
        </div>
      </form>

      <div id="container">
  <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Jenis</th>
      <th scope="col">Corak</th>
      <th scope="col">Warna</th>
      <th scope="col">Teknik Pembuatan</th>
      <th scope="col">Cocok Untuk</th>
      <th scope="col">Gramasi</th>
      <th scope="col">Gambar</th>
      <th class="aksi" scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

  <?php if(empty($kain)) : ?>
      <tr>
        <td colspan="11">
          <p style="color: red; font-style: italic;" class="text-center">Data Kain Tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>
    <?php $i = 1; 
    foreach( $kain as $k ) : ?>
      <tr>
        <th scope="row" class="align-middle"><?= $i++; ?></th>
            <td class="align-middle"><?= $k["nama"]?></td>
            <td class="align-middle"><?= $k["harga"]?></td>
            <td class="align-middle"><?= $k["jenis"]?></td>
            <td class="align-middle"><?= $k["corak"]?></td>
            <td class="align-middle"><?= $k["warna"]?></td>
            <td class="align-middle"><?= $k["teknik_pembuatan"]?></td>
            <td class="align-middle"><?= $k["cocok_untuk"]?></td>
            <td class="align-middle"><?= $k["gramasi"]?></td>
            <td class="align-middle">
                <img src="../img/<?= $k["gambar"]; ?>" height="50" class="rounded-2">
            </td>
            <td class="align-middle aksi">
                <a href="ubah.php?id=<?= $k["id"]; ?>" class="btn badge bg-warning">ubah</a>
                <a href="hapus.php?id=<?= $k["id"]; ?>" class="btn badge bg-danger" onclick="return confirm('yakin?');">hapus</a>
            </td>
          </tr>
     <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../dist/js/script.js"></script>
  </body>
</html>