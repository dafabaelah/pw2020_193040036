<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}
// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

// cek apakah tombol sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal diubah";
  }
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

  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header text-center">
        <h3>From Ubah Data Mahasiswa</h3><br>
      </div>
      <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $m['id']; ?>">
          <div class="foto">
            <img src="img/<?= $m['gambar']; ?>" class="img-responsive img-thumbnail foto2" style="width: 200px; float: right; display: block; border: 10px; box-shadow: 1px 1px 7px black">
          </div>
          <div class="form-group">
            <label>
              <label for="nama">Nama : </label><br>
              <input type="text" name="nama" id="nama" class="form-control" required value="<?= $m['nama']; ?>">
            </label>
          </div>
          <div class="form-group">
            <label>
              <label for="nrp">Nrp : </label><br>
              <input type="text" name="nrp" id="nrp" class="form-control" required value="<?= $m['nrp']; ?>">
            </label>
          </div>
          <div class="form-group">
            <label>
              <label for="email">E-mail : </label><br>
              <input type="email" name="email" id="email" class="form-control" required value="<?= $m['email']; ?>">
            </label>
          </div>
          <div class="form-group">
            <label>
              <label for="jurusan">Jurusan : </label><br>
              <input type="text" name="jurusan" id="jurusan" class="form-control" required value="<?= $m['jurusan']; ?>">
            </label>
          </div>
          <label for="gambar">Gambar : </label><br>
          <input type="hidden" name="gambar_lama" value="<?= $m['gambar']; ?>">
          <div class="custom-file" style="width: 275px">
            <input type="file" name="gambar" id="gambar" class="custom-file-input" onchange="previewImage()">
            <label class="custom-file-label" for="gambar">Masukan gambar...</label>
          </div>
          <br>
          <br>
          <button type="sumbit" name="ubah" class="btn btn-outline-success">Ubah Data!</button>
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