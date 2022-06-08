<?php 
require_once __DIR__ . '/vendor/autoload.php';

require '../admin/functions.php';
$kain = query("SELECT * FROM kain");

$mpdf = new \Mpdf\Mpdf();

$cetak = '
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
      <h1 class="text-center mt-5">Daftar Kain di Kainin.id</h1>
      <form action="" method="POST" class="mt-4 form-cari">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="keyword" placeholder="Cari Kain Disini.." autocomplete="off" id="keyword"> 
          <button class="tombol-cari btn btn-outline-success" type="submit" name="cari" id="tombol-cari">Cari</button>
        </div>
      </form>

      <div id="container">
  <table class="table table-success table-striped" border="1" cellpadding="10" cellspacing="0">
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
    </tr>
  </thead>
  <tbody>';

    $i = 1; 
    foreach( $kain as $k ) {
      $cetak .= '<tr>
        <th scope="row" class="align-middle">' .$i++. '</th>
            <td class="align-middle">'. $k["nama"].'</td>
            <td class="align-middle">'. $k["harga"].'</td>
            <td class="align-middle">'. $k["jenis"].'</td>
            <td class="align-middle">'. $k["corak"].'</td>
            <td class="align-middle">'. $k["warna"].'</td>
            <td class="align-middle">'. $k["teknik_pembuatan"].'</td>
            <td class="align-middle">'. $k["cocok_untuk"].'</td>
            <td class="align-middle">'. $k["gramasi"].'</td>
            <td class="align-middle">
                <img src="../img/'. $k["gambar"] .'" height="50" class="rounded">
            </td>
          </tr>';
        }
  $cetak .= '</tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../dist/js/script.js"></script>
  </body>
</html>';

$mpdf->WriteHTML("$cetak");
$mpdf->Output("Daftar Mahasiswa", "I");

 ?>