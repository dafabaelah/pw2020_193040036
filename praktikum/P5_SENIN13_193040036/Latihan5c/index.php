<?php
//menghubungkan dengan file php lainnya
require 'php/function.php';

//melakukan query
$elektronik = query("SELECT * FROM elektronik");
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
    <link rel="stylesheet" href="../src/css/kayu.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Latihan 5c</title>
</head>

<body>
    <a href="../" type="button" class="btn btn-outline-primary">Kembali</a>
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
            </div>
        </div>
    </div>
</body>

</html>