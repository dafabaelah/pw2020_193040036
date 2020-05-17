<?php
session_start();
require 'function.php';

// // melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: ./admin/");
  exit;
}

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: ./admin/");
    exit;
  }
}

// login
if (isset($_POST['sumbit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      // jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }
    }
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
      header("Location: ./admin/");
      die;
    }
    header("Location: ./admin/");
    die;
  }
  $error = true;
}
?>

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
      height: 100vh;
      padding: 20px;
      float: left;
      padding-top: 20vh;
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
      height: 100vh;
      bottom: 0;
      top: 0;
      background: linear-gradient(45deg, #5000CA, #00CBA9);
      background-repeat: no-repeat;
    }
  </style>
  <title>Login | 193040036</title>
</head>

<body id="particles-js">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="login">
          <h4><a href="../"><img src="../assets/icon/logo.ico" width="60px" title="Klik untuk keberanda"></a>LOGIN ADMIN</h4>
          <form action="" method="POST">
            <?php if (isset($error)) : ?>
              <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Username atau Password salah!</strong>
              </div>
            <?php endif; ?>
            <div class="form-group">
              <label for="username">Username :</label>
              <input type="text" name="username" class="form-control" id="username" placeholder="Masukan Username" autofocus autocomplete="off" required>
            </div>
            <div class="form-group">
              <label for="password">Password :</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password" required>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="remember" name="remember">
              <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary" name="sumbit">Submit</button>
            <small style="color: white;" class="form-text text-muted">Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></small>
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