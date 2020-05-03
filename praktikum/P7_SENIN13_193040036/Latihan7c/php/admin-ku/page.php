<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
    case 'data':
      include 'admin.php';
      break;
    case 'beranda':
      include 'beranda.php';
      break;
    case 'ubah':
      include 'ubah.php';
      break;
    case 'tambah':
      include 'tambah.php';
      break;
    case 'hps':
      include 'hapus.php';
      break;
  }
} else {
  include "beranda.php";
}
