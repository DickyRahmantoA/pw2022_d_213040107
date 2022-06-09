<?php 

session_start(); // untuk memulai eksekusi session pada server dan kemudian menyimpannya pada browser
$_SESSION = [];
session_unset();
session_destroy(); // session yang telah ada/ dibuat akan dihancurkan

setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

header("Location:login.php");
exit;

?>