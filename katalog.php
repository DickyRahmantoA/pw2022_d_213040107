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
    <form class="d-flex ms-auto my-4 my-lg-0" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari Kain Disini.." aria-label="Search">
        <button class="btn btn-light" type="submit"><img src="https://img.icons8.com/material-sharp/18/000000/search.png"/></button>
      </form>
      <ul class="navbar-nav ms-auto mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="katalog.php" >Katalog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- Navbar Akhir -->

    <!-- Carousel Awal -->
    <div id="carouselExampleSlidesOnly" class="carousel slide mt-3" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/tubes/img/33.jpeg" class="d-block img-fluid" >
        </div>
      </div>
</div>
    <!-- Carousel Akhir -->

    <!-- Kategori Awal -->
<div class="container">
  <div class="col">
    <div class="row-lg-2 row-md-3 row-sm-4 row-6">
      <div class="menu-kategori">
        <a href="#">
        <label for="customRange3" class="form-label"></label>
        <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
        </a>
        <p>Harga</p>
        <hr>
        <p>Jenis</p>
        <hr>
        <p>Corak</p>
        <hr>
        <p>Warna</p>
        <hr>
        <p>Cocok Untuk</p>
        <hr>
        <p>Gramasi</p>
        <hr>
        <p>Teknik Pembuatan</p>
      </div>
    </div>
  </div>
</div>
<!-- Kategori Akhir -->