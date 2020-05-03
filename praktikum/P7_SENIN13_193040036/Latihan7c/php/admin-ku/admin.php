<?php
//session statr, supaya nggak bisa diakses sebelum login
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: ../login.php");
  exit;
}

// menghubungkan dengan file php lainnya
require '../function.php';

// melakukan query

// tombol cari ditekan
if (isset($_POST['cari'])) {
  $keyword = $_POST['keyword'];
  $elektronik = query("SELECT * FROM elektronik WHERE 
                nama_barang LIKE '%$keyword%' OR
                nama_penemu LIKE '%$keyword%' OR
                tahun_ditemukan LIKE '%$keyword%' OR
                asal LIKE '%$keyword%'
  ");
} else {
  $elektronik = query("SELECT * FROM elektronik");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title>Admin</title>
</head>

<body>
  <div class="container adm">
    <div class="tambah">
      <a href="index.php?page=tambah" class="btn btn-warning"><i class="fas fa-plus"></i> Tambah Data</a>
    </div> <br>
    <form action="" method="POST">
      <input type="text" name="keyword" autofocus>
      <button type="sumbit" name="cari" class="btn btn-primary">Cari!</button>
      <br>
      <br>
    </form>
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
      <?php if (empty($elektronik)) : ?>
        <td>
          <h3 style="text-align: center;">Data Tidak Ditemukan!!!</h3>
        </td>
      <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($elektronik as $elektro) : ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td>
              <a href="index.php?page=ubah&id=<?= $elektro['id']; ?>"><button class="btn btn-success"><i class="fas fa-edit"></i> Ubah</button></a>
              <a href="hapus.php?page=hps&id=<?= $elektro['id']; ?>" onclick="return confrim('Hapus Data??')"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button></a>
            </td>
            <td><img width="200px" src="../../assets/img/<?= $elektro["gambar"]; ?>" /> </td>
            <td> <?= $elektro["nama_barang"]; ?> </td>
            <td> <?= $elektro["nama_penemu"]; ?> </td>
            <td> <?= $elektro["tahun_ditemukan"]; ?> </td>
            <td> <?= $elektro["asal"]; ?> </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>
  </div>
</body>

</html>