<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Daffa Akhdan Fadhillah">
  <link rel="shortcut icon" href="assets/logo.ico">
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- cssku -->
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/error.css">
  <!-- ini title -->
  <script language='JavaScript'>
    var txt = " Selamat Datang di Website Penemuan Barang Elektronik";
    var speed = 200;
    var refresh = null;

    function action() {
      document.title = txt;
      txt = txt.substring(1, txt.length) + txt.charAt(0);
      refresh = setTimeout("action()", speed);
    }
    action();
  </script>

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand logo" href="./">
      <img src="assets/logo.ico" width="40" height="40" class="d-inline-block align-top" alt="">
      Penemuan
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="php/login.php">Masuk ke halaman admin <i class="fas fa-sign-in-alt"></i></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="cari">Search</button>
      </form>
    </div>
  </nav>
  <br>
  <?php include "php/isi.php"; ?>
  <br>
  <!-- Footer -->
  <footer class="page-footer bg-info footerku">
    <div class="footer-copyright text-center py-3">&copy;2020 Copyright :
      <a href="./" style="text-decoration: none; color: white;">Daffa Akhdan Fadhillah | 193040036</a>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>