<?php
// Pertemuan 2, belajar mengenal sintaks PHP
// echo untuk mencetak nilai ke layar

echo "<hr>";

//OPERATOR
// Aritmatika
// +, -, *, /, %
echo 5 % 2; // sisa bagi
echo "<hr>";

// Perbandingan 
// <, >, <=, >=, ==, !=
echo 10 != 20;
echo "<hr>";

// Variabel
// Tempat menampung nilai
// tidak boleh mengandung spasi
// boleh mengandung angka, tapi tidak boleh diawal
// snake_case : $nama_depan_mahasiswa
// camelCase : namaDepanMahasiswa
// kebab-case : nama-depan-mahasiswa
$nama = 'udin';
$nama = 'saud';
echo $nama;
echo "<hr>";

// Penugasan / Assigment
// =, +=, -=, *=, /=, %=
$a = 10;
$a = 20;
$a = 30;
echo $a;
echo "<hr>";

// Increment & Decrement
// ++, --
$b = 10;
$b--;
echo $b;
echo "<hr>";

// Identitas 
// ===, !==
echo 10 === "10";
echo "<hr>";






echo "Tugas Video Pertemuan 2";
echo "<hr>";
// tugas yang di video pertemuan 2
// pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

echo "Dicky Rahmanto";
echo "<hr>";

print "Dicky Rahmanto";
echo "<hr>";

print_r("Dicky Rahmanto");
echo "<hr>";

var_dump("Dicky Rahmanto");
echo "<hr>";

echo 123;
echo "<hr>";

echo true;
echo "<hr>";

echo false;
echo "<hr>";

echo "jum'at";
echo "<hr>";

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP
// Contoh di pages 140

// Variabel dan Tipe Data
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Dicky Rahmanto"; 
// echo 'Halo, nama saya $nama';

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// .
// $nama_depan = "Dicky";
// $nama_belakang = "Rahmanto";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5 ;
// echo $x; 
// $nama = "Dicky";
// $nama .= " ";
// $nama .= "Rahmanto";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat datang <?php echo $nama; ?></h1>
    <p><?php echo "Ini Adalah Paragraf"; ?></p>
    <?php 
    echo "<h1>Halo, Selamat datang Dicky</h1>"?>
</body>
</html>