<?php
require '../koneksi.php';

$id_pengaduan = $_POST['id_pengaduan'];
$tgl = $_POST['tgl_tanggapan'];
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];
$status = 'selesai';

// Lakukan query menggunakan mysqli_query()
$sql = mysqli_query($koneksi, "INSERT INTO tanggapan(id_pengaduan, tgl_tanggapan, tanggapan, id_petugas)
                                VALUES('$id_pengaduan', '$tgl', '$tanggapan', '$id_petugas')");

$update_sts = mysqli_query($koneksi, "UPDATE pengaduan SET status='$status' WHERE id_pengaduan='$id_pengaduan'");

if ($sql) {
    ?>
    <script type="text/javascript">
        alert('Data Sudah Ditanggapi');
        window.location = "admin.php?url=verifikasi_pengaduan";
    </script>
    <?php
}
?>
