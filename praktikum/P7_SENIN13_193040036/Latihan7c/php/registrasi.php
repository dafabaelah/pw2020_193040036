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
  <link rel="stylesheet" href="../css/bootstrap.min.css">
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

<body class="bg-info">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="regis">
          <h4><a href="../"><img src="../assets/logo.ico" width="60px" title="Klik untuk keberanda"></a>FORM REGISTRASI</h4>
          <form action="" method="POST">
            <div class="form-group">
              <label for="username">Username :</label>
              <input type="text" name="username" class="form-control" id="username" placeholder="Masukan Username" autofocus autocomplete="off" required>
            </div>
            <div class="form-group">
              <label for="password">Password :</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="register">Registrasi</button>
            <small class="form-text text-muted">Sudah punya akun ? Login <a href="login.php">Disini</a></small>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>