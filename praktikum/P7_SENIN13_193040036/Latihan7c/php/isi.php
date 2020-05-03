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

<!-- awal isi -->
<div class="container isi">
    <div class="row justify-content-start">
        <?php if (empty($elektronik)) : ?>
            <?php include "error/pencarian.php"; ?>
        <?php else : ?>
            <?php foreach ($elektronik as $elektro) : ?>
                <div class="kotak-shadow">
                    <div class="card-deck" style="width: 18rem; height: 26rem;">
                        <div class="card border border-info">
                            <div>
                                <img height="250px" src="./assets/img/<?= $elektro['gambar']; ?>" class="card-img-top border border-light rounded-circle" alt="">
                                <br>
                            </div>

                            <div class="card-body text-center align-center">
                                <h4 class="card-title">
                                    <?= $elektro["nama_barang"] ?>
                                </h4>
                                <a href="php/detail.php?id=<?= $elektro['id'] ?>" class="btn btn-primary">Klik Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<!-- akhir -->