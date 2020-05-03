<?php
$keyword = $_GET['keyword'];
?>

<!-- awal page not found -->
<div class="container penc">
  <div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h5>
      <p>pencarian : <?= $keyword; ?></p>
    </h5>
  </div>
  <img src="assets/sedih.png">
  <h3>Maaf Data yang Anda Cari Tidak Ditemukan</h3>
</div>
<!-- akhir -->