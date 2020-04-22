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

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama_brng = htmlspecialchars($data['nama_barang']);
    $nama_pen = htmlspecialchars($data['nama_penemu']);
    $tahun = htmlspecialchars($data['tahun_ditemukan']);
    $asal = htmlspecialchars($data['asal']);

    $query = "INSERT INTO
                elektronik 
              VALUES
              (null, '$gambar', '$nama_brng', '$nama_pen', '$tahun', '$asal');
              ";
    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id");

    return mysqli_affected_rows($conn);
}
