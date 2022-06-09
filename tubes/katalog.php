<?php 
session_start();
require 'admin/functions.php';
if(!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
$kain = query("SELECT * FROM kain");


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/tubes/dist/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&family=Poppins&display=swap" rel="stylesheet">
    <title>Kainin.id</title>
    <style>
      body {
        background-color: #eaeaea;
        font-family: "Poppins", sans-serif;
        color: #2d2d2d;
        font-size: 14px;
      }

      .form-control {
        font-size: 14px;
      }

      .card-img{
        overflow: hidden;
      }

      .card-img a{
        transition: all 1.3s ease;
      }

      .card-img:hover a{
        transform: scale(1.2);
      }

      @media screen and (min-width: 994px) {
              .form-control {
        width: 350px;
      }
      }

      @media screen and (max-width: 994px) {
              .navbar-nav {
        text-align: center;
      }
      }
      /* Style */
    </style>
  </head>

  <body>
    <!-- Navbar Awal -->
<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #b1cba6;">
  <div class="container">
    <a class="navbar-brand ml" href="index.php">Kainin<strong>.id</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form action="" method="POST" class="d-flex ms-auto my-4 my-lg-0" role="search">
        <input class="form-control me-2" type="text" name="keyword2" placeholder="Cari Kain Disini.." aria-label="Search" autocomplete="off" id="keyword2">
        <button class="btn btn-light" name="cari2" id="klik-cari" type="submit"><img src="https://img.icons8.com/material-sharp/18/000000/search.png"/></button>
      </form>
      <ul class="navbar-nav ms-auto mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="katalog.php">Katalog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="aboutus.php">Tentang Toko</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Hubungi Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active btn btn-outline-success" href="logout.php" >keluar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- Navbar Akhir -->

    <!-- Carousel Awal -->
    <div id="carouselExampleSlidesOnly" class="carousel slide mt-3 mb-4" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="container mt-2">
          <div class="carousel-item active">
            <img src="img/cr4.png" class="d-block img-fluid rounded-3">
            <div class="card-img-overlay d-flex justify-content-around">
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    <!-- Carousel Akhir -->

    <!-- Kategori Awal -->
    <div class="container">
  <button class="btn btn-outline-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Belum Mendapatkan Kain yang Sesuai?
  </button>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title text-center" id="offcanvasWithBothOptionsLabel">Filter Kategori</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <select class="form-select form-select-md" aria-label=".form-select-sm example">
          <option selected>Jenis</option>
          <option value="1">Polyester</option>
          <option value="2">Sifon</option>
          <option value="3">Nylon</option>
          <option value="4">Kaos</option>
        </select>
        <br>
        <select class="form-select form-select-md" aria-label=".form-select-sm example">
          <option selected>Corak</option>
          <option value="1">Kotak-kotak</option>
          <option value="2">Garis-garis</option>
          <option value="3">Bunga-bunga</option>
          <option value="4">Polos</option>
          <option value="5">Abstract Layer</option>
          <option value="6">Rib Knit</option>
        </select>
        <br>
        <select class="form-select form-select-md" aria-label=".form-select-sm example">
          <option selected>Warna</option>
          <option value="1">Warna warni</option>
          <option value="2">Ungu</option>
          <option value="3">Kuning</option>
          <option value="4">Coklat</option>
          <option value="5">Merah</option>
          <option value="6">Navy</option>
          <option value="7">Hijau</option>
          <option value="8">Hitam</option>
          <option value="9">Pink</option>
          <option value="10">Putih</option>
          <option value="11">Marun</option>
          <option value="12">Jingga</option>
          <option value="13">Cream</option>
          <option value="14">Abu-abu</option>
          <option value="15">Violet</option>
          <option value="16">Biru Muda</option>
          <option value="17">Mint</option>
          <option value="18">Dark Grey</option>
          <option value="19">Biru</option>
          <option value="20">Mustard</option>
          <option value="21">Terakota</option>
        </select>
        <br>
        <select class="form-select form-select-md" aria-label=".form-select-sm example">
          <option selected>Teknik Pembuatan</option>
          <option value="1">Woven</option>
          <option value="2">Twill Woven</option>
          <option value="3">Knitting</option>
        </select>
        <br>
        <select class="form-select form-select-md" aria-label=".form-select-sm example">
        <option selected>Cocok Untuk</option>
          <option value="1">Atasan</option>
          <option value="2">Kemeja</option>
          <option value="3">Tunik</option>
          <option value="4">Blouse</option>
          <option value="5">Gamis</option>
          <option value="6">Dress</option>
          <option value="7">Daster</option>
          <option value="8">Blazer</option>
          <option value="9">Rok</option>
          <option value="10">Piyama</option>
          <option value="11">Setelan one set</option>
          <option value="12">Crop top</option>
          <option value="13">Dekorasi</option>
          <option value="14">Legging</option>
          <option value="15">Manset</option>
          <option value="16">Celana olahraga</option>
          <option value="17">Culotte</option>
          <option value="18">Outer</option>
          <option value="19">Cardigan</option>
          <option value="20">Celana</option>
          <option value="21">Baju</option>
          <option value="22">Baju Koko</option>
          <option value="23">Jumpsuit</option>
          <option value="24">Sweater</option>
        </select>
        <br>
        <select class="form-select form-select-md" aria-label=".form-select-sm example">
          <option selected>Gramasi</option>
          <option value="1">1-100</option>
          <option value="2">101-150</option>
          <option value="3">151-200</option>
          <option value="4">201-250</option>
          <option value="5">251-300</option>
          <option value="6">300++</option>
        </select>
        <br>
      </div>
    </div>
    </div>
      <!-- Kategori Akhir -->

      <!-- Produk Awal -->
  <div class="container mt-4" id="container">
  <div class="row">
  <?php foreach($kain as $k) : ?>
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-img text-center">
            <a href="detail.php?id=<?= $k['id'];?>" class="d-flex"><img src="img/<?= $k['gambar']; ?>" height="250" class="rounded-3 img-fluid"></a>
          </div>
          <h5 class="card-title mt-2"><?= $k['nama']; ?></h5>
          <p class="card-text"><?= $k['harga']; ?>/meter</p>
          <a href="detail.php?id=<?= $k['id'];?>" class="btn btn-outline-success mb-3">Selengkapnya..</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
  </div>
    <!-- Produk Akhir -->

    <!-- Awal Footer -->
 <footer class="p-5 mt-5" style="background-color: #b1cba6;">
    <div class="container text-center text-md-left">
      <div class="row text-center text-md-left">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-3 font-weight-bold text-white">Kainin.id</h5>
            <p>CV. NUSA TEXTILE COMPANY</p>
            <p>Perusahaan Textile Terbaik di Jawa Barat</p>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-3 font-weight-bold text-white">Lokasi</h5>
            <p>BLOK G, no.10, Jl. Cipanas PERUM BUMI NUSA INDAH, Nanjungmekar, Rancaekek, Nanjungmekar, Rancaekek, Nanjungmekar, Kec. Rancaekek, Kabupaten Bandung, Jawa Barat 40394</p>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-3 font-weight-bold text-white">Jam Operasional</h5>
            <p>Senin-Sabtu          : 07.00-17.00</p>
            <p>Minggu & Hari Besar  : Tutup</p>
            <a href="https://goo.gl/maps/xrM8V4p4hk852DsNA" class="btn btn-outline-success">Lihat Lokasi</a>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-3 font-weight-bold text-white">Kainin.id</h5>
            <p><a href="index.php" style="text-decoration: none;" class="text-dark">Home</a></p>
            <p><a href="katalog.php" style="text-decoration: none;" class="text-dark">Katalog</a></p>
            <p><a href="aboutus.php" style="text-decoration: none;" class="text-dark">About Us</a></p>
            <p><a href="Contact" style="text-decoration: none;" class="text-dark">Contact</a></p>
            <a href="" class="btn btn-outline-success">Hubungi Kami</a>
        </div>
        </div>
        <hr class="mb-4">
        <div class="row">
          <div class="col-md-7 col-lg-8">
            <p>Copyright @2022 Created by: 
              <a href="https://github.com/kutulaut" style="text-decoration: none;">
                <strong class="text-success">Kutulaut</strong>
              </a></p>
          </div>
          <div class="col-md-3 col-lg-4">
            <div class="text-center text-md-right">
              <ul>
                <li class="list-inline-item">
                  <a href=""><img src="https://img.icons8.com/ios-filled/35/000000/whatsapp--v1.png"/></a>
                </li>
                <li class="list-inline-item">
                  <a href=""><img src="https://img.icons8.com/ios-filled/35/000000/instagram-new--v1.png"/></a>
                </li>
                <li class="list-inline-item">
                  <a href=""><img src="https://img.icons8.com/ios-filled/35/000000/twitter.png"/></a>
                </li>
                <li class="list-inline-item">
                  <a href=""><img src="https://img.icons8.com/ios-filled/35/000000/facebook-new.png"/></a>
                </li>
                <li class="list-inline-item">
                  <a href=""><img src="https://img.icons8.com/glyph-neue/35/000000/github.png"/></a>
                </li>
              </ul>
           </div>
        </div>
      </div>   
   </div>
</footer>
    <!-- Akhir Footer -->
<script src="dist/js/script2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>