<?php 
  require 'admin/functions.php';

  if(isset($_POST['registrasi'])) {
    if(registrasi($_POST) > 0 ) {
      echo "<script> 
            alert('user baru berhasil ditambahkan. silahkan login!');
            document.location.href = 'login.php';
          </script>";
    } else {
      echo 'user gagal ditambahkan!';
    }
  }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Registrasi Kainin.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
      body {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        background-color: #b1cba6;
      }

      .box {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        background-color: white;
        border-radius: 8px;
        padding: 20px 20px;
      }

      .contentform {
        margin: 3%;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5 mb-4">
      <div class="box">
        <div class="row contentform">
          <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
            <img src="img/1.jpg" class="img-fluid rounded-4">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <h4 class="text-center">Form Registrasi</h4>
            <form action="" method="POST" required>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input placeholder="Masukkan Username anda.." type="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" autofocus autocomplete="off" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input placeholder="Masukkan Password anda.." type="password" class="form-control" id="exampleInputPassword1" name="password1" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                <input placeholder="Masukkan Kembali Password anda.." type="password" class="form-control" id="exampleInputPassword1" name="password2" required>
              </div>
              <button type="submit" name="registrasi" class="btn btn-outline-success w-100">Registrasi</button>
            </form>
            <p style="color: #111; font-weight: 600;">Apakah anda sudah punya akun? jika sudah klik <a href="login.php">Login</a></p>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>