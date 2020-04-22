<?php
require 'function.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil Ditambahkan!');
              document.location.href = 'admin.php';
              </script>";
  } else {
    echo "<script>
              alert('Data Gagal Ditambahkan!');
              document.location.href = 'admin.php';
              </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../src/css/kayu.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title>Tambah Data</title>
</head>

<body>
  <div class="container">
    <h3>Form Tambah Data</h3><br>
    <form method="POST">
      <div class="form-group">
        <label>
          <label for="gambar">Gambar</label><br>
          <input type="text" name="gambar" id="gambar" class="form-control" required autofocus>
          <small class="form-text text-muted">Masukan file yang ekstensi : .jpg, .jepg, .png</small>
        </label>
      </div>
      <div class="form-group">
        <label>
          <label for="nama_barang">Nama Barang Elektronik</label><br>
          <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
        </label>
      </div>
      <div class="form-group">
        <label>
          <label for="nama_penemu">Nama Penemu</label><br>
          <input type="text" name="nama_penemu" id="nama_penemu" class="form-control" required>
        </label>
      </div>
      <div class="form-group">
        <label>
          <label for="tahun_ditemukan">Tahun Ditemukan</label><br>
          <input type="text" name="tahun_ditemukan" id="tahun_ditemukan" class="form-control" required>
        </label>
      </div>
      <div class="form-group">
        <label>
          <label for="asal">Asal</label><br>
          <input type="text" name="asal" id="asal" class="form-control" required>
        </label>
      </div>
      <br>
      <button type="sumbit" name="tambah" class="btn btn-outline-success">Tambah Data!</button>
      <button type="sumbit" class="btn btn-outline-secondary">
        <a href="../" style="text-decoration: none; color: black">Kembali</a>
      </button>
    </form>
  </div>
</body>

</html>