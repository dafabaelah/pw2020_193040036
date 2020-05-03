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

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $nama_brng = htmlspecialchars($data['nama_barang']);
    $nama_pen = htmlspecialchars($data['nama_penemu']);
    $tahun = htmlspecialchars($data['tahun_ditemukan']);
    $asal = htmlspecialchars($data['asal']);

    $query = "UPDATE elektronik 
              SET
              gambar = '$gambar',
              nama_barang = '$nama_brng',
              nama_penemu = '$nama_pen',
              tahun_ditemukan = '$tahun',
              asal = '$asal'
              WHERE id = $id
              ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('Username sudah digunakan');
          </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
