<!-- <?php 
// Pertemuan 5 offline
// Pertemuan 5 - ARRAY
// Array adalah variabel yang dapat menyimpan banyak nilai sekaligus

$hari1 = "senin";
$hari2 = "selasa";

$bulan1 = "Januari";
$bulan2 = "Februari";

// membuat array
$hari = ["Senin", "Selasa", "Rabu", "kamis"]; // versi baru
$bulan = array("Januari", "Februari", "Maret"); // versi lama

// mencetak array
// menggunakan index, dimulai dari 0
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";

// menggunakan var_dump() atau print_r()
// hanya untuk debungging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// mencetak untuk user
// menggunakan looping
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// menggunakan foreach
// pengulangan khusus ARRAY
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}
echo "<hr>";

// memanipulasi array
// menambah 1 elemen di akhir
$hari[] = "jum'at";
$hari[] = "sabtu";
print_r($hari);
echo "<br>";
$bulan[] = "April";
$bulan[] = "Mei";
print_r($bulan);
?> -->



<?php 
// Video di youtube
// Array
// Variable yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0
 
// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari","Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r
// var_dump($hari); 
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// // menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari); 

?>