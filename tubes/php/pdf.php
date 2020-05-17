<?php
require 'function.php';

if (!isset($_GET['pdf-id'])) {
    header("location: ../index.php");
    exit;
}

$id = $_GET['pdf-id'];
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$p = query("SELECT * FROM elektronik WHERE id = $id")[0];
$html = '<html>';
$html .= '
<head>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        img {
            width: 100%;
            height: auto;
        }

        table {
            margin: auto;
        }
    </style>
</head>
<body>
<div class="">
    <table class="table table-striped">
        <div class="img-thumbnail">
            <img id="zoom" src="../assets/image/' . $p["gambar"] . '" alt="" width="500px" height="auto" title="scroll kebawah untuk zoom">
        </div>
        <tr>
            <td>Nama Barang elektronik</td>
            <td>:</td>
            <td>' . $p["nama_barang"] . '</td>
        </tr>
        <tr>
            <td>Nama Penemu</td>
            <td>:</td>
            <td>' . $p["nama_penemu"] . '</td>
        </tr>
        <tr>
            <td>Tahun Ditemukan</td>
            <td>:</td>
            <td>' . $p["tahun_ditemukan"] . '</td>
        </tr>
        <tr>
            <td>Asal</td>
            <td>:</td>
            <td>' . $p["asal"] . '</td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td>' . $p["deskripsi"] . '</td>
        </tr>
    </table>
    <br>
</div>
</body>';
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('download-' . $p["nama_barang"] . '.pdf', array("Attachment" => 0));
