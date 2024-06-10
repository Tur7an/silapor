<?php
require 'koneksi.php';

// Ambil nilai dari form registrasi
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$role = "masyarakat"; // Set peran default

// Lakukan query untuk menyimpan data pengguna baru
$query = "INSERT INTO users (nik, nama, username, password, telp, level) VALUES ('$nik', '$nama', '$user', '$pass', '$telp', '$role')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    // Jika pendaftaran berhasil, arahkan ke halaman login
    header('location: index.php');
} else {
    // Jika terjadi kesalahan, tampilkan pesan kesalahan
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
