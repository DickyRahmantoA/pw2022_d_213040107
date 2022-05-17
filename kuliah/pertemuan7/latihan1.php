<?php 
// $_GET
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
    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>