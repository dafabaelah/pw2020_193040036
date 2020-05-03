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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/detail.css">
    <title>Detail</title>
</head>

<body class="bg-info">
    <div class="container bg-light detail">
        <table class="table table-striped">
            <div class="img-thumbnail">
                <img id="zoom" src="../assets/img/<?= $p["gambar"]; ?>" alt="" width="500px" height="auto" title="scroll kebawah untuk zoom">
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
    <!-- Javascript -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script>
    <script>
        $('#zoom').ezPlus({
            zoomType: 'inner',
            cursor: 'crosshair',
            scrollZoom: true
        });
    </script>
</body>

</html>