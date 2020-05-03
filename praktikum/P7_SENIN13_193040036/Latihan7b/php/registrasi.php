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
  <title>Registrasi</title>
</head>

<body>
  <div class="container">
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
    </form>
  </div>
</body>

</html>