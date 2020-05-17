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
    <meta name="author" content="Daffa Akhdan Fadhillah">
    <meta name="author" content="193040036">
    <link rel="shortcut icon" href="../assets/icon/logo.ico">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        .detail {
            margin: 30px auto;
            padding: 10px;
            width: 1000px;
            background: rgba(255, 255, 255, 0.9) !important;
        }

        img {
            width: 100%;
            height: auto;
        }

        table {
            margin: auto;
        }

        body {
            background: linear-gradient(45deg, #5000CA, #00CBA9) !important;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 100%;
        }

        @media print {
            .btn {
                display: none;
            }
        }
    </style>
    <title>Detail | 193040036</title>
</head>

<body>
    <div class="container bg-light detail">
        <table class="table table-striped">
            <div class="img-thumbnail">
                <img id="zoom" src="../assets/image/<?= $p["gambar"]; ?>" alt="" width="500px" height="auto" title="scroll kebawah untuk zoom">
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
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><?= $p["deskripsi"]; ?></td>
            </tr>
        </table>
        <br>
        <a href="../pencarian.php" class="btn btn-outline-primary">Kembali</a>
        <a href="pdf.php?pdf-id=<?= $p['id'] ?>" class="btn btn-outline-primary" style="float: right;">Download pdf</a>
    </div>
    <!-- Javascript -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
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