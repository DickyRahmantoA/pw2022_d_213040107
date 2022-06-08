<?php
require '../admin/functions.php';

$keyword2 = $_GET["keyword2"];

$query = "SELECT * FROM kain
             WHERE 
          nama LIKE '%$keyword%' OR
          harga LIKE '%$keyword%' OR
        ";
$kain = query($query)
?>

<div class="container mt-4">
  <div class="row">
  <?php foreach($kain as $k) : ?>
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-img">
            <a href="detail.php?id=<?= $k['id'];?>" class="d-flex"><img src="img/<?= $k['gambar']; ?>" height="250" class="rounded-3 img-fluid"></a>
          </div>
          <h5 class="card-title mt-2"><?= $k['nama']; ?></h5>
          <p class="card-text"><?= $k['harga']; ?>/meter</p>
          <a href="detail.php?id=<?= $k['id'];?>" class="btn btn-outline-success mb-3">Selengkapnya..</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
  </div>