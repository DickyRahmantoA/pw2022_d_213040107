<?php 
session_start();
require 'admin/functions.php';

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT username FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if( $key === hash('sha256', $row['username']) ) {
    $_SESSION['login'] = true;
  }

}

if ( isset($_SESSION["login"]) ) {
  header("Location:admin/admin.php");
  exit;
}

if( isset($_POST["login"]) ){

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = 'admin'");

  // cek username
  if( mysqli_num_rows($result) === 1) {
    // cek password
    $row = mysqli_fetch_assoc($result);
    if( password_verify($password, $row["password"]) ) {
      // set session
      $_SESSION["login"] = true;
      header("Location:admin/admin.php");
      exit;
    }
  }
    
  $error = true;

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  if( mysqli_num_rows($result) === 1) {
    // cek password
    $row = mysqli_fetch_assoc($result);
    if( password_verify($password, $row["password"]) ) {
      // set session
      $_SESSION["login"] = true;
      header("Location: index.php");
      exit;

      // cek remember me
      if( isset($_POST['remember']) ) {
        // buat cookie

        setcookie('id', $row['id'], time()+60);
        setcookie('key', hash('sha256', $row['username']),
        time() + 60);
      }
    }
  }
    
  $error = true;


}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login Kainin.id</title>
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
    <div class="container mt-5">
      <div class="box">
        <div class="row contentform">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <img src="img/1.jpg" class="img-fluid rounded-4">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <h4 class="text-center mt-3">Form Login</h4>
            <?php if(isset($error)) : ?>
              <p style="color: red; font-style: italic;">Username / password salah</p>
            <?php endif; ?>
            <form action="" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input placeholder="Masukkan Username anda.." name="username" type="username" class="form-control" id="username" aria-describedby="emailHelp" autofocus autocomplete="off" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input placeholder="Masukkan Password anda.." type="password" name="password" class="form-control" id="password">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                <label class="form-check-label" for="remember">Ingat saya</label>
              </div>
              <button type="submit" name="login" class="btn btn-success w-100">Login</button>
            </form>
            <p style="color: #111; font-weight: 600;">Apakah anda sudah punya akun? jika belum klik <a href="registrasi.php">Registrasi</a></p>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>