<?php
require '../koneksi.php';

$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$level=$_POST['level'];

// Lakukan query menggunakan mysqli_query()
$sql = mysqli_query($koneksi, "INSERT INTO users(nama,username,password,telp,level)
VALUES ('$nama', '$user', '$pass', '$telp', '$level')");


if ($sql) {
    ?>
    <script type="text/javascript">
        alert ("Data berhasil disimopan");
        window.location='admin.php?url=lihat_petugas';
    </script>
    <?php
}
?>
