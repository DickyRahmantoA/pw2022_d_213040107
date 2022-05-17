<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "root", "pw2022_d");

// ambil data dari tabel mahasiswa / query
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// mengecek jika mysql tidak terhubung
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// if( !$result ) {
//     echo mysqli_query($conn);
// }

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan arrray numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembaalikan keduanya
// mysqli_fetch_object() // 

// while ( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs);
// }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    
    <?php $i = 1; ?>
    <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i ?></td>
        <td>
            <a href="">Ubah</a> |
            <a href="">Hapus</a>
        </td>
        <td> <img src="img/<?= $row["$gambar"]; ?> </td>
        <td> <?= $row["npm"]?> </td>
        <td> <?= $row["nama"]?> </td>
        <td> <?= $row["email"]?> </td>
        <td> <?= $row["jurusan"]?> </td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
</table>
</body>
</html>