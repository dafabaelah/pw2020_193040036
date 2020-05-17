<?php
session_start();
require './php/function.php';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Daffa Akhdan Fadhillah">
  <meta name="author" content="193040036">
  <link rel="shortcut icon" href="./assets/icon/logo.ico">

  <!-- styleku -->
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/bg.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <title>Penemuan | tubes daffa</title>
</head>

<body id="home">

  <!-- Isi1 -->
  <section class="siji">
    <div id="particles-js">
      <!-- Navbar -->
      <?php include "php/halaman/body/navbar.php"; ?>
      <!-- selesai navbar -->
      <?php include "php/halaman/jumbotron.php"; ?>
    </div>
  </section>
  <!-- selesai isi -->
  <br>
  <br>
  <!-- Isi2 -->
  <section class="loro">
    <?php include "php/halaman/kontent.php"; ?>
  </section>
  <!-- selesai isi -->

  <!-- Isi2 -->
  <section class="loro">

  </section>
  <!-- selesai isi -->

  <!-- foooter -->
  <?php include "php/halaman/body/footer.php"; ?>
  <!-- selesai footer -->

  <!-- Optional JavaScript -->
  <script src="assets/js/app.js"></script>
  <script src="assets/js/particles.js"></script>
  <script>
    particlesJS.load('particles-js', 'assets/particles.json', function() {
      console.log('particles.js loaded - callback');
    });
  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>