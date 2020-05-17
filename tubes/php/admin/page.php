<?php

if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
    case 'data':
      include './data.php';
      break;
    case 'user':
      include './user.php';
      break;
    case 'ubah':
      include './ubah.php';
      break;
    case 'tambah':
      include './tambah.php';
      break;
    case 'hps':
      include './hapus.php';
      break;
    case 'data-ku':
      include './data.php';
      break;
  }
} else {
  include './data.php';
}
