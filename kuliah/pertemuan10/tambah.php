<?php 
// require 'functions.php';
// // koneksi ke DBMS
// $conn = mysqli_connect("localhost", "root", "root", "pw2022_d");

// // cek apakah tombol submit sudah ditekan atau belum
// if( isset($_POST["submit"]) ) {
   
    
//     // cek apakah data berhasil ditambahkan atau tidak
//     if( tambah($_POST) > 0 ) {
//         echo "
//             <script>
//                 alert('data berhasil ditambahkan!');
//                 document.location.href = 'index.php';
//             </script>
//         ";
//     } else {
//         echo "
//         <script>
//             alert('data gagal ditambahkan!');
//             document.location.href = 'index.php';
//         </script>
//     ";
//     }

// }

?> 

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h3>Form Tambah Data Mahasiswa</h1>    

    <form action="" method="post">
        <ul>
        <li>
                <label for="nama">nama : </label>
                <input type="text" name="nama" id="nama" autofocus required>
            </li>
            <li>
                <label for="npm">npm : </label>
                <input type="text" name="npm" id="npm" required>
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">gambar : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>

    </form>


</body>
</html> -->


<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'latihan3.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NPM :
          <input type="text" name="npm" required>
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html> 