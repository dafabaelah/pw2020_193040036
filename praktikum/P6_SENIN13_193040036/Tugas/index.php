<?php
//menghubungkan dengan file php lainnya
require 'php/function.php';

//melakukan query
// $elektronik = query("SELECT * FROM elektronik");

// tombol cari ditekan
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $elektronik = query("SELECT * FROM elektronik WHERE 
                  nama_barang LIKE '%$keyword%'
    ");
} else {
    $elektronik = query("SELECT * FROM elektronik");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../src/df.ico">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Tugas</title>
</head>

<body>
    <a href="../" type="button" class="btn btn-outline-primary">Kembali</a>
    <a href="php/admin.php" type="button" class="btn btn-outline-primary">Admin</a>
    <form action="" method="GET">
        <input type="text" name="keyword" autofocus>
        <button type="sumbit" name="cari" class="btn btn-primary">Cari!</button>
        <br>
        <br>
    </form>
    <div class="container">
        <h1>
            <style>
                h1 {
                    color: salmon;
                    text-align: center;
                }
            </style>Daftar Barang Elektronik
        </h1>
        <div class="container align-center" id="barang">
            <div class="row m4">
                <?php if (empty($elektronik)) : ?>
                    <td>
                        <h3 style="text-align: center;">Data Tidak Ditemukan!!!</h3>
                    </td>
                <?php else : ?>
                    <?php foreach ($elektronik as $elektro) : ?>
                        <div class="">
                            <div class="card-deck" style="width: 18rem; height: 26rem;">
                                <div class="card border border-info">
                                    <div>
                                        <img height="250px" src="./assets/img/<?= $elektro['gambar']; ?>" class="card-img-top border border-light rounded-circle" alt="">
                                        <br>
                                    </div>

                                    <div class="card-body text-center align-center">
                                        <h3 class="card-title">
                                            <?= $elektro["nama_barang"] ?>
                                        </h3>
                                        <a href="php/detail.php?id=<?= $elektro['id'] ?>" class="btn btn-primary">Klik Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>