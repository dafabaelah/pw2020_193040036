<?php
require './function.php';

if (!isset($_GET['keyword'])) {
  header("location: ../index.php");
  exit;
}

$elektronik = cari($_GET['keyword']);
?>

<?php if (empty($elektronik)) : ?>
  <?php include "./error/pencarian.php"; ?>
<?php else : ?>
  <?php foreach ($elektronik as $e) : ?>
    <div class="col-md-3">
      <div class="card mb-5">
        <img height="200px" class="card-img-top" src="./assets/image/<?= $e['gambar']; ?>" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title"><?= $e['nama_barang']; ?></h4>
          <p class="card-text"><?= $e['nama_penemu']; ?></p>
          <a href="php/detail.php?id=<?= $e['id'] ?>" class="btn btn-outline-primary">Klik Detail</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
<?php endif; ?>

</div>