<?php 
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h3>Detail Mahasiswa</h3>

    <ul>
        <li><img src="img/<?= $m['gambar'];?>"></li>
        <li>nama : <?= $m['nama'];?> </li>
        <li>npm : <?= $m['npm'];?> </li>
        <li>email : <?= $m['email'];?> </li>
        <li>jurusan : <?= $m['jurusan'];?> </li>
        <li><a href="ubah.php?id=<?= $m['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin'); ">Hapus</a></li>
        <li><a href="index.php">Kembali ke Daftar Mahasiswa</a> </li>
    </ul>
</body>
</html>
