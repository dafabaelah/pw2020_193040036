<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';
// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    .login {
      width: 400px;
      margin: 100px auto;
      padding: 20px;
      position: relative;
      background: transparent;
    }

    .login h3 {
      color: white;
    }
  </style>
  <title>Login</title>
</head>

<body>
  <div class="container">
    <div class="card login">
      <div class="card-header text-center bg-info">
        <h3>Form Login</h3>
      </div>
      <div class="card-body">
        <?php if (isset($login['error'])) : ?>
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><?= $login['pesan']; ?></strong>
          </div>
        <?php endif; ?>
        <form action="" method="POST">
          <div class="form-group">
            <label for="username">Username :</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Masukan Username" autofocus autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password" required>
          </div>
          <button type="submit" name="login" class="btn btn-primary">Login</button>
          <small class="form-text text-muted">Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></small>
          </ul>
      </div>
    </div>
  </div>
  </form>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>