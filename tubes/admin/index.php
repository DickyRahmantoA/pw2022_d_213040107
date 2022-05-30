<?php 
require 'functions.php';
$kain = query("SELECT * FROM kain");

if(isset($_POST['cari'])) {
  $kain = cari($_POST['keyword']);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kainin.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
      <h1>Daftar Kain</h1>
      <a href="tambah.php" class="btn btn-success">Tambah Data</a>

      <form action="" method="POST" class="mt-4">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="keyword" placeholder="Cari Kain Disini.." autocomplete="off"> 
          <button class="tombol-cari btn btn-success" type="submit" name="cari">Cari</button>
        </div>
      </form>
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
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    
    <?php $i= 1; foreach( $kain as $k ) : ?>
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
                <img src="/tubes/img/ <?= $k["gambar"]; ?>" height="50" class="rounded-circle">
            </td>
            <td class="align-middle">
                <a href="ubah.php?id=<?= $k["id"]; ?>" class="btn badge bg-warning">ubah</a>
                <a href="hapus.php?id=<?= $k["id"]; ?>" class="btn badge bg-danger" onclick="return confirm('yakin?');">hapus</a>
            </td>
          </tr>
     <?php endforeach; ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../dist/js/script.js"></script>
  </body>
</html>