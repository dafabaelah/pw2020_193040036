<?php
//session statr, supaya nggak bisa diakses sebelum login
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: ../login.php");
  exit;
}
require '../function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1400px, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Daffa Akhdan Fadhillah">
  <link rel="shortcut icon" href="../../assets/icon/logo.ico">
  <title>Admin Panel</title>
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- style-ku -->
  <link rel="stylesheet" href="../../assets/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/css/admin2.css">
</head>

<body>
  <!-- Navbar -->

  <!-- Start Sidebar -->
  <nav class="navbar navbar-expand-md navbar-dark" style="background: linear-gradient(45deg, #5000CA, #00CBA9)!important">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand logo" href="#">
      <img src="../../assets/icon/logo.ico" width="40" height="40" class="d-inline-block align-top" alt="">
      Penemuan
    </a>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="../../"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown d-sm-block d-md-none">
          <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu
          </a>
          <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="#">Dashboard</a>
            <a class="dropdown-item" href="#">Profile</a>
          </div>
        </li>

      </ul>

    </div>

  </nav>


  <div class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
      <ul class="list-group">
        <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
          <small>Daffa Panel - Menu</small>
        </li>
        <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
            <span class="menu-collapsed">Dashboard</span>
            <span class="dropdown-toggle ml-auto"></span>
          </div>
        </a>
        <div id='submenu1' class="collapse sidebar-submenu">
          <a href="index.php?page=data" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed"><i class="fas fa-table"></i> Kelola Data</span>
          </a>
          <a href="index.php?page=tambah" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed"><i class="fas fa-plus"></i> Tambah Data</span>
          </a>
        </div>
        <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fas fa-user fa-fw mr-3"></span>
            <span class="menu-collapsed">Profile</span>
            <span class="dropdown-toggle ml-auto"></span>
          </div>
        </a>
        <div id='submenu2' class="collapse sidebar-submenu">
          <!-- <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed">Setting</span>
          </a> -->
          <a href="../logout.php" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed">Logout <i class="fas fa-sign-out-alt"></i></span>
          </a>
        </div>

      </ul>
    </div>


    <!-- kotent -->
    <div class="card col" style="padding: 20px;">
      <?php include './page.php'; ?>

      <!--  -->

    </div>
  </div>

  <!--  -->


  <!-- Optional JavaScript -->
  <script src="../../assets/js/javaku.js"></script>
  <script src="../../assets/js/jquery-3.3.1.min.js"></script>
  <script src="../../assets/js/jquery.dataTables.min.js"></script>
  <script src="../../assets/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#data').DataTable();
    });
  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
</body>

</html>