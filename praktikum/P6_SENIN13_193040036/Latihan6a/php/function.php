<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040036") or die("Database salah!");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $cari = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($cari)) {
        $rows[] = $row;
    }

    return $rows;
}
