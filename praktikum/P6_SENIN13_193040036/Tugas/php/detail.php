<?php
//mengecek apakah ada id yang dikirimkan 
//jika tidak makan akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'function.php';

//mengambil id dari url
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$p = query("SELECT * FROM elektronik WHERE id = $id")[0];
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

    <title>Detail</title>
</head>

<body class="bg-info">
    <div class="container-sm align-center bg-light">
        <table class="table table-striped" style="margin: auto">
            <div class="img-thumbnail">
                <img src="../assets/img/<?= $p["gambar"]; ?>" alt="" width="1100px">
            </div>
            <tr>
                <td>Nama Barang elektronik</td>
                <td>:</td>
                <td><?= $p["nama_barang"]; ?></td>
            </tr>
            <tr>
                <td>Nama Penemu</td>
                <td>:</td>
                <td><?= $p["nama_penemu"]; ?></td>
            </tr>
            <tr>
                <td>Tahun Ditemukan</td>
                <td>:</td>
                <td><?= $p["tahun_ditemukan"]; ?></td>
            </tr>
            <tr>
                <td>Asal</td>
                <td>:</td>
                <td><?= $p["asal"]; ?></td>
            </tr>
        </table>
        <br>
        <a href="../" type="button" class="btn btn-outline-primary">Kembali</a>
    </div>
</body>

</html>