<?php
//session statr, supaya nggak bisa diakses sebelum login
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: ../login.php");
  exit;
}
require '../function.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
              alert('Data Berhasil Dihapus!');
              document.location.href = 'index.php?page=data';
              </script>";
} else {
  echo "<script>
              alert('Data Gagal Dihapus!');
              document.location.href = 'index.php?page=data';
              </script>";
}
