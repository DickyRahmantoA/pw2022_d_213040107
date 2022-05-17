<?php 
// Array Associative
// Array yang key nya ber-asosiasi / berpasangan dengan string

$mahasiswa = [
    [
        "nama" => "Dicky Rahmanto", 
        "npm" => "213040107", 
        "jurusan" => "Teknik Informatika",
        "email" => "saud123@gmail.com"
    ],
    [
        "nama" => "Wildan", 
        "npm" => "213040127", 
        "email" => "udin123@gmail.com", 
        "jurusan" => "Dokter Tumbuhan"
    ],
    [
        "nama" => "Sanan", 
        "npm" => "213040108",
        "email" => "ariana123@gmail.com",
        "jurusan" =>  "Teknik Nuklir",
    ],
    [
        "nama" => "kutulaut", 
        "npm" => "213040109", 
        "jurusan" => "Teknik sipil",
        "email" =>   "saud789@gmail.com"
    ],
];

// var_dump($mahasiswa);

?> 

<?php foreach( $mahasiswa as $mhs ) { ?>
    <ul>
        <li>Nama : <?php echo$mhs["nama"]?></li>
        <li>NRP : <?php echo$mhs["npm"]?></li>
        <li>Email : <?php echo $mhs["email"]?></li>
        <li>Jurusan : <?php echo$mhs["jurusan"]?></li>
</ul>
<?php } ?>