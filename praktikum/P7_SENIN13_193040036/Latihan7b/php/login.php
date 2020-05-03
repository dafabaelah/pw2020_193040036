<?php
session_start();
require 'function.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
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
    }
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
      header("Location: admin.php");
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
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title>Login</title>
</head>

<body>
  <div class="container">
    <form action="" method="POST">
      <?php if (isset($error)) : ?>
        <p>Username atau Password salah</p>
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
        <input type="checkbox" class="form-check-input" id="remember">
        <label class="form-check-label" for="remember">Remember me</label>
      </div>
      <button type="submit" class="btn btn-primary" name="sumbit">Submit</button>
      <small class="form-text text-muted">Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></small>
    </form>
  </div>
</body>

</html>