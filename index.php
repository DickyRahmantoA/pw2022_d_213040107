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
          <a class="nav-link active" href="katalog.php">Katalog</a>
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
    <!-- <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide mt-5 " data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active card-img-overlay">
            <img src="/tubes/img/4.jpg" class="d-block img-fluid" style="height: 270px; width: 1200px;">
            <div class="card-img-overlay d-flex justify-content-center align-content-center">
              <h5 class="card-title">Selamat</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text">Last updated 3 mins ago</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/tubes/img/9.jpg" class="d-block img-fluid" style="height: 270px; width: 1200px;">
          </div>
          <div class="carousel-item">
            <img src="/tubes/img/8.jpg" class="d-block img-fluid" style="height: 270px; width: 1200px;">
          </div>
        </div> -->
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> -->
      <!-- </div>
    </div> -->
    <!-- Carousel Akhir -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" 
            class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" 
            aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" 
            aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" 
            aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/tubes/img/12.jpg" class="d-block img-fluid" alt="header1">
              <div class="card-img-overlay">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/tubes/img/11.jpg" class="d-block img-fluid" alt="header2">
              <div class="card-img-overlay">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/tubes/img/14.jpg" class="d-block img-fluid" alt="header3">
              <div class="card-img-overlay">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/tubes/img/14.png" class="d-block img-fluid" alt="header3">
              <div class="card-img-overlay">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
          </div>
        </div>
      </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>





    <!-- Content Awal -->

    <!-- Content Akhir -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>