<!-- <?php 
// Pertemuan 5 Offline
// Representasi Data Mahasiswa
// array numerik ialah array yang menggunakan angka
$mahasiswa = [
    ["Dicky Rahmanto", "213040107", "saud123@gmail.com", "Teknik Informatika"],
    ["Wildan", "213040127", "udin123@gmail.com", "Dokter Tumbuhan"],
    ["Syahnan", "213040108","ariana123@gmail.com", "Teknik Nuklir"]
];

// print_r($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title> 
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) { ?>
<ul>
    <li>Nama : <?php echo$mhs[0]?></li>
    <li>NRP : <?php echo$mhs[1]?></li>
    <li>Jurusan : <?php echo$mhs[2]?></li>
    <li>Email : <?php echo $mhs[3]?></li>
</ul>
<?php } ?>
</body>
</html> -->

<?php 
$mahasiswa = [
    ["Dicky Rahmanto", "213040107", "Teknik Informatika", "saud123@gmail.com"],
    ["saud", "213040108", "Teknik Industri", "saud456@gmail.com"],
    ["kutulaut", "213040109", "Teknik sipil", "saud789@gmail.com"],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title> 
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]?></li>
    <li>NRP : <?= $mhs[1]?></li>
    <li>Jurusan : <?= $mhs[2]?></li>
    <li>Email : <?= $mhs[3]?></li>
</ul>
<?php endforeach; ?>
</body>
</html>