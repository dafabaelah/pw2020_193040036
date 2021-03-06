<?php
// menghubungkan dengan file php lainnya
require 'function.php';

// melakukan query

$elektronik = query("SELECT * FROM elektronik");

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
  <title>Latihan6c</title>
</head>

<body>
  <a href="../" type="button" class="btn btn-outline-primary">Kembali</a>
  <div class="container">
    <div class="tambah">
      <a href="tambah.php" class="btn btn-warning">Tambah Data</a>
    </div> <br>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Opsi</th>
          <th scope="col">Gambar</th>
          <th scope="col">Nama Barang Elektronik</th>
          <th scope="col">Nama Penemu</th>
          <th scope="col">Tahun Ditemukan</th>
          <th scope="col">Asal</th>
        </tr>
      </thead>
      <?php $i = 1; ?>
      <?php foreach ($elektronik as $elektro) : ?>
        <tr>
          <th scope="row"><?= $i; ?></th>
          <td>
            <a href=""><button class="btn btn-success">Ubah</button></a>
            <a href="hapus.php?id=<?= $elektro['id']; ?>" onclick="return confrim('Hapus Data??')"><button class="btn btn-danger">Hapus</button></a>
          </td>
          <td><img width="200px" src="../assets/img/<?= $elektro["gambar"]; ?>" /> </td>
          <td> <?= $elektro["nama_barang"]; ?> </td>
          <td> <?= $elektro["nama_penemu"]; ?> </td>
          <td> <?= $elektro["tahun_ditemukan"]; ?> </td>
          <td> <?= $elektro["asal"]; ?> </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>