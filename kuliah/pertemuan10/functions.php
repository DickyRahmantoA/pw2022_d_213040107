<?php 
// koneksi ke database
// $conn = mysqli_connect("localhost", "root", "root", "pw2022_d");

// function query($query) {
//     global $conn;
//     $result = mysqli_query($conn, $query);

//     // jika hasilnya hanya 1 data
//     if (mysqli_num_rows($result) == 1) {
//         return mysqli_fetch_assoc($result);
//     }

//     $rows = [];
//     while( $row = mysqli_fetch_assoc($result) ) {
//         $rows[] = $row;
//     }
//     return $rows;
// }


// function tambah($data) {
//     global $conn;
//      // ambil data dari tiap elemen dalam form
//      $nama = htmlspecialchars(["nama"]);
//      $npm = htmlspecialchars(["npm"]);
//      $email = htmlspecialchars(["email"]);
//      $jurusan = htmlspecialchars(["jurusan"]);
//      $gambar = htmlspecialchars(["gambar"]);
 
//      // query insert data
//     $query = "INSERT INTO mahasiswa
//                 VALUES
//                 (null, '$nama', '$npm', '$email', '$jurusan', '$gambar')
//             ";
//     mysqli_query($conn, $query);
//     return mysqli_affected_rows($conn);
// }
?>


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
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}