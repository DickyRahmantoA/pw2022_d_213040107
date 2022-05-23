<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/output.css" rel="stylesheet">
  <title>Kainin.id</title>
</head>
<body>
  <!-- Header Start -->
  <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
      <div class="flex items-center justify-between relative">
        <div class="px-4">
          <a href="#home" class="font-bold text-lg text-primary block py-6">Kainin.id</a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"> </span>
            <span class="hamburger-line transition duration-300 ease-in-out"> </span>
            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"> </span>
          </button>

          <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex">
              <li class="group">
                <a href="#home" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-primary">Katalog</a>
              </li>
              <li class="group">
                <a href="#about" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-primary">Tentang Toko</a>
              </li>
              <li class="group">
                <a href="#contact" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-primary">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->
  <!-- Hero Section Start -->
  <section id="home" class="pt-36">
    <div class="container">
      <div class="flex flex-wrap bg-cover" style="background-image: url(img/4.jpg);">
        <div class="w-full self-center px-4">
          <h1 class="font-extrabold text-2xl ml-28 text-primary">Selamat Datang di Kainin.id</h1> 
          <h2 class="text-lg ml-28 text-slate-600">Kain dengan kualitas kelas internasional <span class="block font-bold text-xl text-slate-900">Berbahan kain yang lembut, halus, dan tidak mudah luntur</span></h2>
          <p class="text-lg ml-28 text-slate-600">Jika Ingin Order klik dibawah sini!</p>
          <a href="#" class="inline-block px-4 py-3 bg-green-400 ml-28 text-white rounded-full font-semibold hover:shadow-lg hover:opacity-75 transition duration-300 ease-in-out">Hubungi Kami!</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->

  <div class="mb-96"></div>
  <script src="dist/js/script.js"></script>
</body>
</html>