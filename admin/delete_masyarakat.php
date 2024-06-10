<?php
require '../koneksi.php';

$nik = $_GET['nik'];

// Lakukan query menggunakan mysqli_query()
$sql = mysqli_query($koneksi, "DELETE FROM masyarakat WHERE nik='$nik'");

if ($sql) {
    ?>
    <script type="text/javascript">
        alert('Data Berhasil Dihapus');
        window.location='admin.php?url=lihat_masyarakat';
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
        alert('Data Gagal Dihapus');
        window.location='admin.php?url=lihat_masyarakat';
    </script>
    <?php
}
mysqli_close($koneksi);
?>
