<?php 
// function 

// 1. Built-in Function

// date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,3,11,2002));

// strtotime
// echo date("l", strtotime("25 aug 1985"));

// string
// strlen()
// untuk menghitung panjang string
// strcmp()
// untuk membandingkan dua string
// explode()
// untuk memecah sebuah string menjadi array
// htmlspecialchars()
// untuk menjaga kita dari orang yang iseng masuk ke website kita

// utility / fungsi bantuan
// var_dump()
// untuk mencetak isi dari variable, array, objek
// isset()
// untuk mengecek sebuah variable udh pernah dibikin atau belum
// empty()
// untuk mengecek data ada isinya atau tidak
// die()
// untuk memberhentikan program 
// sleep()
// untuk memberhentikan sementara

?>