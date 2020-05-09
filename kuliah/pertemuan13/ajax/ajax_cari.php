<?php

require '../functions.php';

$mahasiwa = cari($_GET['keyword']);
?>

<table class="table table-hover">
  <tr>
    <th>#</th>
    <th>gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>
  <?php if (empty($mahasiwa)) : ?>
    <tr>
      <td colspan="4" style="color : red; font-style: italic;"> Data mahasiswa tidak ditemukan!</td>
    </tr>
  <?php endif; ?>
  <?php $i = 1;
  foreach ($mahasiwa as $m) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m['gambar']; ?>" width="60px"></td>
      <td><?= $m['nama']; ?></td>
      <td>
        <a class="btn btn-outline-info" href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>