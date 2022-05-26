<?php 
require '../admin/functions.php';
$kain = cari($_GET['keyword']);
?>

<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Jenis</th>
      <th scope="col">Corak</th>
      <th scope="col">Warna</th>
      <th scope="col">Teknik Pembuatan</th>
      <th scope="col">Cocok Untuk</th>
      <th scope="col">Gramasi</th>
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    
    <?php if(empty($kain)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">Data Kain Tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>
    <?php $i= 1; foreach( $kain as $k ) : ?>
      <tr>
        <th scope="row" class="align-middle"><?= $i++; ?></th>
            <td class="align-middle"><?= $k["nama"]?></td>
            <td class="align-middle"><?= $k["harga"]?></td>
            <td class="align-middle"><?= $k["jenis"]?></td>
            <td class="align-middle"><?= $k["corak"]?></td>
            <td class="align-middle"><?= $k["warna"]?></td>
            <td class="align-middle"><?= $k["teknik_pembuatan"]?></td>
            <td class="align-middle"><?= $k["cocok_untuk"]?></td>
            <td class="align-middle"><?= $k["gramasi"]?></td>
            <td class="align-middle">
                <img src="img/<?= $k["gambar"]; ?>" height="50" class="rounded-circle">
            </td>
            <td class="align-middle">
                <a href="ubah.php?id=<?= $k["id"]; ?>" class="btn badge bg-warning">ubah</a>
                <a href="hapus.php?id=<?= $k["id"]; ?>" class="btn badge bg-danger" onclick="return confirm('yakin?');">hapus</a>
            </td>
          </tr>
     <?php endforeach; ?>
  </tbody>
</table>