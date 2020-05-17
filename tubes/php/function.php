<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw19036_tubes_193040036") or die("Database salah!");

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
function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM elektronik WHERE 
    nama_barang LIKE '%$keyword%' ";

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    //ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        // echo "<script>
        //       alert('pilih gambar terlebih dahulu!');
        //       </script>";
        return 'no.jpg';
    }

    //cek ektensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ektensi_file = explode('.', $nama_file);
    $ektensi_file = strtolower(end($ektensi_file));
    if (!in_array($ektensi_file, $daftar_gambar)) {
        echo "<script>
          alert('yang anda pilih bukan gambar!');
          </script>";
        return false;
    }

    //cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
          alert('yang anda pilih bukan gambar!');
          </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb == 5000000
    if ($ukuran_file > 5000000) {
        echo "<script>
          alert('ukuran terlalu besar!');
          </script>";
        return false;
    }

    // lolos pengecekan 
    // siap upload
    // generate nama file baru
    $nama_file_baru = uniqid('daffa');
    $nama_file_baru .= '.';
    $nama_file_baru .= $ektensi_file;
    move_uploaded_file($tmp_file, '../../assets/image/' . $nama_file_baru);
    return $nama_file_baru;
}

function tambah($data)
{
    $conn = koneksi();
    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    // $gambar = htmlspecialchars($data['gambar']);
    $nama_brng = htmlspecialchars($data['nama_barang']);
    $nama_pen = htmlspecialchars($data['nama_penemu']);
    $tahun = htmlspecialchars($data['tahun_ditemukan']);
    $asal = htmlspecialchars($data['asal']);
    $deskripsi = htmlspecialchars($data['deskripsi']);

    $query = "INSERT INTO
                elektronik 
              VALUES
              (null, '$gambar', '$nama_brng', '$nama_pen', '$tahun', '$asal', '$deskripsi');
              ";
    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    // // menghapus gambar di folder img
    // $g = query("SELECT * FROM elektronik WHERE id = $id");
    // if ($g['gambar'] != 'no.jpg') {
    //     unlink('../assets/image/' . $g['gambar']);
    // }

    mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar_lama = htmlspecialchars($data['gambar_lama']);
    $nama_brng = htmlspecialchars($data['nama_barang']);
    $nama_pen = htmlspecialchars($data['nama_penemu']);
    $tahun = htmlspecialchars($data['tahun_ditemukan']);
    $asal = htmlspecialchars($data['asal']);
    $deskripsi = htmlspecialchars($data['deskripsi']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'no.jpg') {
        $gambar = $gambar_lama;
    }

    $query = "UPDATE elektronik 
              SET
              gambar = '$gambar',
              nama_barang = '$nama_brng',
              nama_penemu = '$nama_pen',
              tahun_ditemukan = '$tahun',
              asal = '$asal',
              deskripsi = '$deskripsi'
              WHERE id = $id
              ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);


    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('Username sudah digunakan');
          </script>";
        return false;
    }

    // pencocokan pass 1 dan pass 2
    if ($password !== $password1) {
        echo "<script>
              alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }


    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$nama', '$email', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
