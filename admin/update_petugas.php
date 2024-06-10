<?php
require '../koneksi.php';

$nama = $_POST['nama_petugas'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];
$id = $_POST['id_petugas'];

// Lakukan query menggunakan mysqli_query()
$sql = "UPDATE petugas SET nama_petugas='$nama', username='$user', password='$pass', telp='$telp', level='$level' WHERE id_petugas='$id'";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    ?>
    <script type="text/javascript">
        alert("Data berhasil diubah");
        window.location='admin.php?url=lihat_petugas';
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
        alert("Data gagal diubah");
        window.location='admin.php?url=edit_petugas&id=<?php echo $id; ?>';
    </script>
    <?php
}
mysqli_close($koneksi);
?>
