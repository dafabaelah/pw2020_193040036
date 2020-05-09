<?php
//session dijalankan
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}


require 'functions.php';
$mahasiwa = query("SELECT * FROM mahasiswa");

// ketika tombol cari ditekan
if (isset($_POST['cari'])) {
  $mahasiwa = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Daffa Akhdan Fadhillah">
  <meta name="author" content="193040036">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <div class="container">
    <a href="logout.php" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i>Logout</a><br>
    <br>
    <div class="card">
      <div class="card-header text-center">
        <h3>Daftar Mahasiswa</h3>
      </div>
      <div class="card-body">
        <div class="tambah">
          <a href="tambah.php" class="btn btn-warning"><i class="fas fa-plus"></i> Tambah Data</a>
        </div> <br>

        <form action="" method="POST">
          <input type="text" name="keyword" class="keyword" size="40" placeholder="Masukan Keyword Pencarian...." autocomplete="off" autofocus>
          <button type="submit" name="cari" class="btn btn-primary tombol-cari">Cari!</button> </input>
        </form>
        <br>
        <div class="container-cari">
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
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <script src="js/script.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>