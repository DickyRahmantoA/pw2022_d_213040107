<?php 

session_start(); // untuk memulai eksekusi session pada server dan kemudian menyimpannya pada browser
session_destroy(); // session yang telah ada/ dibuat akan dihancurkan
header("Location: login.php");
exit;

?>