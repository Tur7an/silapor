<?php
require '../koneksi.php';

$id = $_GET['id'];

// Lakukan query menggunakan mysqli_query()
$sql = mysqli_query($koneksi, "DELETE FROM users WHERE id='$id'");

if ($sql) {
    ?>
    <script type="text/javascript">
        alert('Data Berhasil Dihapus');
        window.location='admin.php?url=lihat_petugas';
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
        alert('Data Gagal Dihapus');
        window.location='admin.php?url=lihat_petugas';
    </script>
    <?php
}
mysqli_close($koneksi);
?>
