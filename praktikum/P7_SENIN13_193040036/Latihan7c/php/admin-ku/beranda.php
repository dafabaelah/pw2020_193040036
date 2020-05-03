<?php
//session statr, supaya nggak bisa diakses sebelum login
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: ../login.php");
  exit;
}
require '../function.php';
?>

<div class="container">
  <p align="center">السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</p>
  <p>Saya mengerjakan bagian backend ini dengan kemampuan yang saya bisa.</p>
  <p>silahkan pilih dibagian menu</p>
  <p>klik bagian : <a class="nav-link" href="index.php?page=data"><i class="fas fa-table"></i> Kelola Data</a> untuk menambahkan, mengubah, menghapus.</p>
  <p>Sekian & Terimakasih</p>
  <p># Daffa Akhdan Fadhillah - 193040036</p>
</div>