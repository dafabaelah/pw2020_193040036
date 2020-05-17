<?php
//session statr, supaya nggak bisa diakses sebelum login
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: ../login.php");
  exit;
}

require '../function.php';

$id = $_GET['id'];

// menghapus gambar di folder img
$g = query("SELECT * FROM elektronik WHERE id = $id");
if ($g['gambar'] != 'no.jpg') {
  unlink('../../assets/image/' . $g["gambar"]);
}

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
