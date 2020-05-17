<?php
$jmlHal = 4;
// slide altif
$elektro1 = query("SELECT * FROM elektronik LIMIT 0, $jmlHal");
// slide ke 2

// $jmlData = count(query("SELECT * FROM elektronik"));
// $slide2 = $jmlData - 4;
// $hasil = ceil($slide2 / $jmlHal);

// $halAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
// $awalDat = ($slide2 * $halAktif) - $jmlHal;

$elektro2 = query("SELECT * FROM elektronik LIMIT 4, $jmlHal");
$elektro3 = query("SELECT * FROM elektronik LIMIT 8, $jmlHal");
?>

<div class="bg-kontent" id="elektro">
  <div class="abstrak">
    <h3>Barang Elektronik</h3>
    <div class="container">
      <!--  -->
      <!--Carousel Wrapper-->
      <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
          <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
          <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
        </div>
        <!--/.Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
          <li data-target="#multi-item-example" data-slide-to="1"></li>
          <li data-target="#multi-item-example" data-slide-to="2"></li>

        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

          <!--First slide-->
          <div class="carousel-item active">
            <?php foreach ($elektro1 as $e1) : ?>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class=" card-img-top" src="assets/image/<?= $e1['gambar']; ?>" height="200px">
                  <div class="card-body">
                    <h4 class="card-title"><?= $e1['nama_barang']; ?></h4>
                    <p class="card-text"><?= $e1['nama_penemu']; ?></p>
                    <a href="php/detail.php?id=<?= $e1['id'] ?>" class="btn btn-outline-primary">Klik Detail</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <!--/.First slide-->

          <!--Second slide-->
          <div class="carousel-item">
            <?php foreach ($elektro2 as $e2) : ?>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/image/<?= $e2['gambar']; ?>" height="200px">
                  <div class="card-body">
                    <h4 class="card-title"><?= $e2['nama_barang']; ?></h4>
                    <p class="card-text"><?= $e2['nama_penemu']; ?></p>
                    <a href="php/detail.php?id=<?= $e2['id'] ?>" class="btn btn-outline-primary">Klik Detail</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <!--/.Second slide-->

          <!--Second slide-->
          <div class="carousel-item">
            <?php foreach ($elektro3 as $e3) : ?>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="assets/image/<?= $e3['gambar']; ?>" height="200px">
                  <div class="card-body">
                    <h4 class="card-title"><?= $e3['nama_barang']; ?></h4>
                    <p class="card-text"><?= $e3['nama_penemu']; ?></p>
                    <a href="php/detail.php?id=<?= $e3['id'] ?>" class="btn btn-outline-primary">Klik Detail</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <!--/.Second slide-->



        </div>
        <!--/.Slides-->

      </div>
      <!--/.Carousel Wrapper-->
      <!--  -->
    </div>
  </div>
</div>