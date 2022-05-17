<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "root", "pw2022_d");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}
?>