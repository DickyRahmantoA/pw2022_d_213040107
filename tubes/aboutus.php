<?php 
session_start();

if(!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
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
    <form action="katalog.php" method="POST" class="d-flex ms-auto my-4 my-lg-0" role="search">
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

    <!-- Content Awal -->
    <div class="container text-center text-md-left">
      <h1 style="text-align: center;" class="mt-5">Tentang Toko</h1>
      <div class="row text-center text-md-left mt-4">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <img src="img/5.jpg" class="img-fluid rounded-4">
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <img src="img/1.jpg" class="img-fluid rounded-4">
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <img src="img/4.jpg" class="img-fluid rounded-4">
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <img src="img/3.jpg" class="img-fluid rounded-4">
        </div>
      </div>
      <div class="container" style="text-align: justify;">
      <h1 class="mt-5">Lebih Dari 15 Tahun memberikan</h1>
      <h2>yang terbaik untuk anda</h2>
      <p class="mt-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero iusto voluptas eius minus nostrum optio? Doloribus, alias suscipit officia blanditiis ea quis minima magnam? Rerum, exercitationem? Illum nulla officiis illo fuga deleniti sed voluptatibus praesentium, eum nam totam, id mollitia nostrum quod eos ratione quia hic necessitatibus soluta nesciunt aliquam. Perspiciatis labore sed, porro quis vero deleniti, quae modi dolorum, numquam optio odio recusandae molestiae alias. Ea molestiae dolore odit, facilis iste error numquam velit at inventore architecto mollitia, excepturi ducimus fugiat quo adipisci, nobis non molestias nisi natus! Ducimus, eveniet atque voluptatum quaerat aut similique soluta nobis libero non dolore maxime tempora corrupti provident vitae earum in exercitationem error alias dolorum nesciunt magnam sed! Temporibus perspiciatis possimus recusandae nesciunt fuga in. Doloremque laboriosam deserunt ut exercitationem omnis ab a sequi magni accusamus illo! Rerum sed quisquam similique ea blanditiis, sint inventore dicta minima nulla? Temporibus fuga earum aspernatur blanditiis quis tempora minima officia quam nisi nesciunt esse odio reprehenderit, doloribus nam rerum vero consequatur, eius, quos quidem! Velit alias at, natus itaque aperiam, numquam quidem reiciendis id accusantium ea molestiae temporibus repellat nemo non! Reiciendis voluptatum eum cupiditate suscipit tempora incidunt officia. Quisquam a maxime aut ipsum dignissimos quibusdam.</p>
      </div>
    </div>
    <!-- Content Akhir -->

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>