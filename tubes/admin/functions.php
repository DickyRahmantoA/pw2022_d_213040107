<?php

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', 'root', 'tubes') or die('Koneksi ke DB GAGAL!');

    return $conn;
}

function query($query) {
    $conn = koneksi();

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {

    $rows[] = $row;
  }

  return $rows;
}

function upload() {
  // siapkan data gambar
  $nama_file = $_FILES["gambar"]["name"];
  $tipe_file = $_FILES["gambar"]["type"];
  $ukuran_file = $_FILES["gambar"]["size"];
  $error = $_FILES['gambar']['error'];
  $tmp_file =$_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar yang dipilih
  if($error == 4) {
    return 'nophoto.jpg';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if(!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
          alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek tipe file
  if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }
  // cek jika ukuran lebih besar dari 5MB
  if($ukuran_file > 5000000) {
    echo "<script>
    alert('Ukuran gambar terlalu besar!');
    </script>";
    return false;
  }

  // lolos pengecekan gambar
  // buat nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  // upload gambar
  move_uploaded_file($tmp_file, '../img/' . $nama_file_baru);

  return $nama_file_baru;

}

function tambah($data) {
    $conn = koneksi();
    
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $corak = htmlspecialchars($data["corak"]);
    $warna = htmlspecialchars($data["warna"]);
    $teknik_pembuatan = htmlspecialchars($data["teknik_pembuatan"]);
    $cocok_untuk = htmlspecialchars($data["cocok_untuk"]);
    $gramasi = htmlspecialchars($data["gramasi"]);
    // $gambar = htmlspecialchars($data["gambar"]);


    // jika user memilih gambar, jalankan fungsi upload
    $gambar = upload();
    // cek apakah upload berhasil
    if(!$gambar) {
      return false;
    }

    $query = "INSERT INTO 
                kain
              VALUES
                (null, '$nama', '$harga', '$jenis', '$corak', '$warna', '$teknik_pembuatan', '$cocok_untuk', '$gramasi', '$gambar')
             ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id) {
  $conn = koneksi();

    // ambil data mahasiswa
    $k = query("SELECT * FROM kain WHERE id = $id")[0];

    // hapus data gambar
    if($k["gambar"] != 'nophoto.jpg') {
      unlink('../img/' . $k["gambar"]);
    }
  
  mysqli_query($conn, "DELETE FROM kain WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data) {
  $conn = koneksi();

  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $harga = htmlspecialchars($data["harga"]);
  $jenis = htmlspecialchars($data["jenis"]);
  $corak = htmlspecialchars($data["corak"]);
  $warna = htmlspecialchars($data["warna"]);
  $teknik_pembuatan = htmlspecialchars($data["teknik_pembuatan"]);
  $cocok_untuk = htmlspecialchars($data["cocok_untuk"]);
  $gramasi = htmlspecialchars($data["gramasi"]);
  $gambar_lama = htmlspecialchars($data["gambar_lama"]);

  $gambar = upload();
  if(!$gambar) {
    return false;
  }

  if($gambar == 'nophoto.jpg') {
    $gambar = $gambar_lama;
  }

  $query = "UPDATE kain SET
              nama = '$nama',
              harga = '$harga',
              jenis = '$jenis',
              corak = '$corak',
              warna = '$warna',
              teknik_pembuatan = '$teknik_pembuatan',
              cocok_untuk = '$cocok_untuk',
              gramasi = '$gramasi',
              gambar = '$gambar'
              WHERE id = $id
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM kain
                WHERE 
              nama LIKE '%$keyword%' OR
              harga LIKE '%$keyword%' OR
              jenis LIKE '%$keyword%' OR
              corak LIKE '%$keyword%' OR
              warna LIKE '%$keyword%' OR
              teknik_pembuatan LIKE '%$keyword%' OR
              cocok_untuk LIKE '%$keyword%' OR
              gramasi LIKE '%$keyword%'
              ";
    return query($query);
  }

function cari2($keyword2) {
    $query = "SELECT * FROM kain
                WHERE 
              nama LIKE '%$keyword2%' OR
              harga LIKE '%$keyword2%' OR
              ";
    return query($query);
  }




function registrasi($data) {
  $conn = koneksi();

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