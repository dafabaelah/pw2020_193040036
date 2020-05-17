<?php
require 'function.php';

if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
            alert('Registrasi Gagal');
          </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <style>
    .regis {
      width: 400px;
      margin: 100px auto;
      padding: 20px;
      border: #ccc solid 2px;
      position: relative;
      background: white;
    }

    .regis h4 {
      text-align: center;
    }
  </style>
  <title>Registrasi</title>
</head>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Daffa Akhdan Fadhillah">
  <link rel="shortcut icon" href="../assets/icon/logo.ico">
  <!-- Style / Bootstrap css -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <style>
    .login {
      width: 400px;
      height: 150vh;
      padding: 20px;
      float: left;
      padding-top: 70px;
      position: absolute;
      background: rgba(0, 0, 0, 0.7);
      color: white;
      left: 0;
    }

    .login h4 {
      text-align: center;
    }

    #particles-js {
      position: relative;
      width: 100%;
      height: 150vh;
      bottom: 0;
      top: 0;
      background: linear-gradient(45deg, #5000CA, #00CBA9);
      background-repeat: no-repeat;
    }
  </style>
  <title>Registrasi | 193040036</title>
</head>

<body id="particles-js">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="login">
          <h4><a href="../"><img src="../assets/icon/logo.ico" width="60px" title="Klik untuk keberanda"></a>FORM REGISTRASI</h4>
          <form action="" method="POST">
            <div class="form-group">
              <label for="username">Nama :</label>
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama" autofocus autocomplete="off" required>
            </div>
            <div class="form-group">
              <label for="username">Email :</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Email" required>
            </div>
            <div class="form-group">
              <label for="username">Username :</label>
              <input type="text" name="username" class="form-control" id="username" placeholder="Masukan Username" required>
            </div>
            <div class="form-group">
              <label for="password">Password :</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password" required>
            </div>
            <div class="form-group">
              <label for="password">Konfirmasi Password :</label>
              <input type="password" name="password1" class="form-control" id="password1" placeholder="Konfirmasi Password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="register">Registrasi</button>
            <small class="form-text text-muted">Sudah punya akun ? Login <a href="login.php">Disini</a></small>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/app.js"></script>
  <script src="../assets/js/particles.js"></script>
  <script>
    particlesJS.load('particles-js', '../assets/particles.json', function() {
      console.log('particles.js loaded - callback');
    });
  </script>
</body>

</html>