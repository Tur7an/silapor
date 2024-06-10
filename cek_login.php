<?php
require 'koneksi.php';

// Ambil nilai dari form login
$user = $_POST['username'];
$pass = $_POST['password'];

// Lakukan query menggunakan mysqli_query()
$sql = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $data = mysqli_fetch_array($sql);
    // Periksa level petugas
    if ($data['level'] == "Admin") {
        session_start();
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $user;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['telp'] = $data['telp'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['level'] = $data['level'];
        header('location: admin/admin.php');
    } elseif ($data['level'] == "Petugas") {
        session_start();
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $user;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['telp'] = $data['telp'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['level'] = $data['level'];
        header('location: petugas/petugas.php');
    } elseif ($data['level'] == "Masyarakat") {
        session_start();
        $_SESSION['nik'] = $data['id'];
        $_SESSION['username'] = $user;
        $_SESSION['nik'] = $data['nik'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['telp'] = $data['telp'];
        $_SESSION['level'] = $data['level'];
        header('location: masyarakat.php');
    }
} else {
    // Jika tidak ditemukan data yang sesuai, tampilkan pesan kesalahan dan arahkan kembali ke halaman login
    echo "<script type='text/javascript'>
            alert('Username atau Password tidak ditemukan');
            window.location='index.php';
          </script>";
}
?>
