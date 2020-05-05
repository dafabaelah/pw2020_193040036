<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header text-center">
        <h3>Detail Mahasiswa</h3>
      </div>
      <div class="card-body">
        <div class="card-body">
          <img class="card-img-top" src="img/<?= $m['gambar']; ?>" style="width: 18rem;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">NRP : <?= $m['nrp']; ?></li>
            <li class="list-group-item">Nama : <?= $m['nama']; ?></li>
            <li class="list-group-item">Email : <?= $m['email']; ?></li>
            <li class="list-group-item">Jurusan : <?= $m['jurusan']; ?></li>
            <li class="list-group-item"><a class="btn btn-success" href="ubah.php?id=<?= $m['id']; ?>"><i class="fas fa-edit"></i>ubah</a> | <a class="btn btn-danger" href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash-alt"></i>hapus</a></li>
          </ul>
          <a class="btn btn-outline-dark" href=" index.php">Kembali ke daftar mahasiswa</a>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>