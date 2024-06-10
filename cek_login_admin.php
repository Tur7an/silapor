<?php
require 'koneksi.php';

// Ambil nilai dari form login
$user = $_POST['username'];
$pass = $_POST['password'];

// Lakukan query menggunakan mysqli_query()
$sql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username='$user' AND password='$pass'");
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $data = mysqli_fetch_array($sql);
    // Periksa level petugas
    if ($data['level'] == "admin") {
        session_start();
        $_SESSION['id_petugas']=$data['id_petugas'];
        $_SESSION['user'] = $user;
        $_SESSION['nama'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];
        header('location: admin/admin.php');
    } elseif ($data['level'] == "petugas") {
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['nama'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];
        header('location: petugas/petugas.php');
    }
} else {
    // Jika tidak ditemukan data yang sesuai, tampilkan pesan kesalahan dan arahkan kembali ke halaman login
    echo "<script type='text/javascript'>
            alert('Username atau Password tidak ditemukan');
            window.location='index_admin.php';
          </script>";
}
?>
