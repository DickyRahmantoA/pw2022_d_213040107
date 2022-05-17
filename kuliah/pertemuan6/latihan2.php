<?php 
// 

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
[
    "nrp" => "213040107",
    "nama" => "Dicky Rahmanto", 
    "email" => "saud123@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "diki .jpg"
],
[
    "nama" => "saud", 
    "nrp" => "213040108",
    "email" => "saud456@gmail.com",
    "jurusan" => "Teknik Industri",
    "gambar" => "saud .jpeg"
    // "tugas" => [90, 80, 100]
]
];

// echo $mahasiswa[1]["tugas"][1];
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
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs ["nama"]; ?> </li>
        <li>NRP : <?=$mhs ["nrp"]; ?></li>
        <li>Email : <?=$mhs ["email"]; ?></li>
        <li>Jurusan : <?=$mhs ["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
 
</body>
</html>