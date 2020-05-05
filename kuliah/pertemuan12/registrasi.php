<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil ditambahkan. silahkan login!');
            document.location.href = 'login.php';
          </script>";
    return false;
  } else {
    echo 'user gagal ditambahkan!';
  }
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
  <title>Registrasi</title>
</head>

<body>
  <div class="container">
    <div class="card login">
      <div class="card-header text-center bg-info">
        <h3>Form Login</h3>
      </div>
      <div class="card-body">
        <form action="" method="POST">
          <div class="form-group">
            <label for="username">Username :</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Masukan Username" autofocus autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" name="password1" class="form-control" id="password1" placeholder="Masukan Password" required>
          </div>
          <div class="form-group">
            <label for="password">Konfirmasi Password :</label>
            <input type="password" name="password2" class="form-control" id="password2" placeholder="Masukan Password" required>
          </div>
          <button type="submit" name="registrasi" class="btn btn-primary">Login</button>
          <small class="form-text text-muted">Sudah punya akun ? Login <a href="login.php">Disini</a></small>
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