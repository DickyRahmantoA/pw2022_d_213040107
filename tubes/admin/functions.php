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
    $gambar = htmlspecialchars($data["gambar"]);

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
  $gambar = htmlspecialchars($data["gambar"]);

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
  $conn = koneksi();

  if(isset($_GET["cari"])) {
    $keyword = $_GET["keyword"];
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
    $kain = query($query);

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
  }
}