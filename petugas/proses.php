<?php
require '../koneksi.php';

// Lakukan query untuk memperbarui status pengaduan
$id_pengaduan = $_GET['id'];
$sql = "UPDATE pengaduan SET status='Proses' WHERE id_pengaduan='$id_pengaduan'";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    header('Location: petugas.php?url=verifikasi_pengaduan');
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
