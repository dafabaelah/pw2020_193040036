<?php
$keyword = $_GET['keyword'];
?>

<!-- awal page not found -->
<div class="container" style="height: 100vh;">
  <div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h5>
      <p>Pencarian : <?= $keyword; ?></p>
    </h5>
  </div>
  <img src="./assets/icon/sedih.png" style="filter: drop-shadow(2px 2px 2px rgba(0,0,0,0.8)); margin: 70px auto; display: block;">
  <h3>Maaf Data yang Anda Cari Tidak Ditemukan</h3>
</div>
<!-- akhir -->