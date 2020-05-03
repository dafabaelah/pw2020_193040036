<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Daffa Akhdan Fadhillah">
  <link rel="shortcut icon" href="../../assets/logo.ico">
  <title>Admin Panel</title>
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- style-ku -->
  <link rel="stylesheet" href="../../css/admin.css">
</head>

<body>
  <!-- admin page -->
  <div class="container utama">
    <div id="judul">
      <h3>Selamat Datang di Daf-Panel</h3>
      <small>versi : 1.0</small>
    </div>
    <div id="menu">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="../../"><i class="fas fa-home"></i> Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=data"><i class="fas fa-table"></i> Kelola Data</a>
        </li>
        <li class="nav-item border-top">
          <a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
      </ul>
    </div>
    <div class="content" id="content">
      <?php include "page.php"; ?>
    </div>
    <div class="clear"></div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="../../js/bootstrap.min.js"></script>
</body>

</html>