<?php 
session_start();

if(!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'admin/functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$k = query("SELECT * FROM kain WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kain</title>
</head>
<body>
    <h3>Detail Kain</h3>

    <ul>
        <li><img src="img/<?= $k['gambar'];?>" width="200"></li>
        <li>NAMA : <?= $k['nama'];?> </li>
        <li>HARGA : <?= $k['harga'];?> </li>
        <li>JENIS : <?= $k['jenis'];?> </li>
        <li>CORAK : <?= $k ['corak'];?> </li>
        <li>WARNA : <?= $k ['warna'];?> </li>
        <li>TEKNIK PEMBUATAN : <?= $k ['teknik_pembuatan'];?> </li>
        <li>COCOK UNTUK : <?= $k ['cocok_untuk'];?> </li>
        <li>GRAMASI : <?= $k ['gramasi'];?> </li>
        <li><a href="ubah.php?id=<?= $k['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin'); ">Hapus</a></li>
        <li><a href="index.php">Kembali ke Daftar Kain</a> </li>
    </ul>
</body>
</html>
