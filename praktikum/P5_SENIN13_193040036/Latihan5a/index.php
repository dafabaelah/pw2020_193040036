<?php
//melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

//memilih database
mysqli_select_db($conn, "tubes_193040036") or die("Database salah!");

//query mengambil objek dari tabel didalam database
$cari = mysqli_query($conn, "SELECT * FROM elektronik");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../src/df.ico">
    <link rel="stylesheet" href="../src/css/kayu.css">
    <title>Tugas 2</title>
</head>

<body>
    <h1>
        <style>
            h1 {
                color: salmon;
                text-align: center;
            }
        </style>Daftar Barang Elektronik
    </h1>
    <table border=1; cellpadding=10; cellspacing=0; align=center style="background-color: white;">
        <tr bgcolor=grey>
            <th>Nomer</th>
            <th>Gambar</th>
            <th>Nama Barang Elektronik</th>
            <th>Nama Penemu</th>
            <th>Tahun Ditemukan</th>
            <th>Asal</th>
        </tr>

        <?php $i = 1 ?>
        <?php while ($row = mysqli_fetch_assoc($cari)) : ?>
            <tr>
                <td align=center><?= $i ?></td>
                <td><img width="300px" src="assets/img/<?= $row["gambar"]; ?>" />" </td>
                <td align=center> <?= $row["nama_barang"]; ?> </td>
                <td align=center> <?= $row["nama_penemu"]; ?> </td>
                <td align=center> <?= $row["tahun_ditemukan"]; ?> </td>
                <td align=center> <?= $row["asal"]; ?> </td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>
    </table>

    <br>
    <a href="../" type="button" class="button button2">Kembali</a>
</body>

</html>