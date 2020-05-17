<?php
session_start();
require './php/function.php';

$elektronik = query("SELECT * FROM elektronik");
// ketika tombol cari ditekan
if (isset($_POST['cari'])) {
  $elektronik = (cari($_POST['keyword']));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Daffa Akhdan Fadhillah">
  <meta name="author" content="193040036">
  <link rel="shortcut icon" href="./assets/icon/logo.ico">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/cari.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title>Pencarian | 193040036</title>
</head>

<body>
  <!-- Navbar -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: rgba(0, 0, 0, 0.3)">
      <div class="container d-flex justify-content-between">
        <a class="navbar-brand logo" href="./">
          <img src="./assets/icon/logo.ico" width="40" height="40" class="d-inline-block align-top" alt="">
          Penemuan
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample07">
          <div class="">
            <form class="form-inline" method="POST">
              <input class="form-control keyword" type="search" placeholder="Cari nama barang..." aria-label="Search" name="keyword" autocomplete="off" autofocus>
              <button class="btn btn-outline-light my-2 my-sm-0 tombol-cari" type="submit" name="cari">Search</button>
              <!-- <select class="custom-select ml-sm-2" id="inlineFormCustomSelect">
                <option name="order" selected>--Urutkan---</option>
                <option value="1">Nama Barang</option>
                <option value="2">Tahun</option>
                <option value="3">Penemu</option>
              </select>
              <select class="custom-select mr-sm-4" id="inlineFormCustomSelect">
                <option name="urut" value="11" selected>Naik</option>
                <option value="12">Turun</option>
              </select> -->
            </form>
          </div>
        </div>
        <?php
        if (isset($_SESSION['username'])) {
          echo '
          <div class="dropdown">
            <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle"></i> ' . $_SESSION['username'] . '
            </a>

            <div class="dropdown-menu">
              <a class="dropdown-item" href="php/admin/">Admin <i class="fas fa-tachometer-alt"></i></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="php/logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
            </div>
          </div>
          ';
        } else {
          echo '<a href="php/login.php" class="btn btn-outline-light">Login <i class="fas fa-sign-in-alt"></i></a>';
        }

        ?>
        <!-- <a href="php/login.php" class="btn btn-outline-light">Login <i class="fas fa-sign-in-alt"></i></a> -->
      </div>
    </nav>
  </header>
  <!--  -->

  <!-- kontent -->
  <div class="bg-kontent">
    <div class="abstrak">
      <!-- <div class="kolom-cari">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div> -->
      <div class="container row isi">
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
      </div>
    </div>
  </div>
  <!--  -->

  <!-- footer -->
  <?php include "./php/halaman/body/footer.php"; ?>
  <!--  -->
  <script src="./assets/js/cari.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>