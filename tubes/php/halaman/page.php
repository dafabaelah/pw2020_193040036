<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
    case '1':
      echo 'ini data';
      break;
    case 'isi':
      include 'isi.php';
      break;
  }
} else {
  include "beranda.php";
}
