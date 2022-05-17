<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'pw2022_d');


function query($query)
{
  global $conn;

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
    global $conn;

  $nama = htmlspecialchars($data['nama']);
  $npm = htmlspecialchars($data['npm']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
              mahasiswa
            VALUES
            (null, '$nama', '$npm', '$email', '$jurusan', '$gambar');
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $npm = htmlspecialchars($data['npm']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE mahasiswa SET
            nama = '$nama',
            npm = '$npm',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
          WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword) {
  global $conn;

  $query = "SELECT * FROM mahasiswa 
              WHERE 
              nama LIKE '%$keyword%' OR 
              npm LIKE '%$keyword%'
              ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data) {
  global $conn;

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // cek password
    if(password_verify($password, $user['password'])) {
      // set session
    $_SESSION['login'] = true;
    
    header("Location: index.php");
    exit;
    }
  }
    return [
      'error' => true,
      'pesan' => 'Username / Password Salah!'
    ];
  }


function registrasi($data) {
  global $conn;

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username / password kosong
  if(empty($username) || empty($password1) || empty($password2)) {
    echo "<script> 
          alert('username/ password tidak boleh kosong!');
          document.location.href = 'registrasi.php';
        </script>";
        return false;
  }

  // jika username sudah ada
  if(query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script> 
          alert('username sudah terdaftar!');
          document.location.href = 'registrasi.php';
        </script>";
        return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script> 
          alert('konfirmasi password tidak sesuai!');
          document.location.href = 'registrasi.php';
        </script>";
        return false;
  }

  // jika password < 5 digit
  if(strlen($password1) < 5 ) {
    echo "<script> 
          alert('password terlalu pendek!');
          document.location.href = 'registrasi.php';
        </script>";
        return false;
  }

  // jika username & password sudah sesuai
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO user
              VALUES
              (null, '$username', '$password_baru')
              ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}