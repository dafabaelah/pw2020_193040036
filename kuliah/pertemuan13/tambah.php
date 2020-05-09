<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal ditambahkan";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header text-center">
        <h3>From Tambah Data Mahasiswa</h3><br>
      </div>
      <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
          <div class="foto">
            <img src="img/no.jpg" class="img-responsive img-thumbnail foto2" style="width: 200px; float: right; display: block; border: 10px; box-shadow: 1px 1px 7px black">
          </div>
          <div class="form-group">
            <label>
              <label for="nama">Nama : </label><br>
              <input type="text" name="nama" id="nama" class="form-control" required>
            </label>
          </div>
          <div class="form-group">
            <label>
              <label for="nrp">Nrp : </label><br>
              <input type="text" name="nrp" id="nrp" class="form-control" required>
            </label>
          </div>
          <div class="form-group">
            <label>
              <label for="email">E-mail : </label><br>
              <input type="email" name="email" id="email" class="form-control" required>
            </label>
          </div>
          <div class="form-group">
            <label>
              <label for="jurusan">Jurusan : </label><br>
              <input type="text" name="jurusan" id="jurusan" class="form-control" required>
            </label>
          </div>
          <label for="gambar">Gambar : </label><br>
          <div class="custom-file" style="width: 275px">
            <input type="file" name="gambar" id="gambar" class="custom-file-input" onchange="previewImage()">
            <label class="custom-file-label" for="gambar">Masukan gambar...</label>
          </div>
          <br>
          <br>
          <button type="sumbit" name="tambah" class="btn btn-outline-success">Tambah Data!</button>
          <button type="sumbit" class="btn btn-outline-secondary">
            <a href="index.php" style="text-decoration: none; color: black">Kembali</a>
          </button>
        </form>
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