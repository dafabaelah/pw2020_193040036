<?php
session_start();
require 'function.php';

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: ./admin-ku");
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
    header("Location: ./admin-ku");
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
      header("Location: ./admin-ku");
      die;
    }
    header("Location: ../index.php");
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
  <!-- Style / Bootstrap css -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <style>
    .login {
      width: 400px;
      margin: 100px auto;
      padding: 20px;
      border: #ccc solid 2px;
      position: relative;
      background: white;
    }

    .login h4 {
      text-align: center;
    }
  </style>
  <!-- Javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>Login</title>
</head>

<body class="bg-info">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="login">
          <h4><a href="../"><img src="../assets/logo.ico" width="60px" title="Klik untuk keberanda"></a>LOGIN ADMIN</h4>
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
            <small class="form-text text-muted">Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></small>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>