<body>
<main id="main" class="main">
<div class="card shadow">
  <div class="card-header">
    Detail Pengaduan
  </div>
    <?php
    require '../koneksi.php';

    // Pastikan parameter 'id' telah diset sebelum menjalankan query
    if (isset($_GET['id'])) {
        // Lakukan query
        $sql = "SELECT * FROM pengaduan WHERE id_pengaduan='{$_GET['id']}'";
        $result = mysqli_query($koneksi, $sql);

        // Periksa apakah query berhasil dieksekusi
        if ($result) {
            // Ambil data dari hasil query
            $data = mysqli_fetch_array($result);
            ?>
  <div class="card-body">
  <div class="form-group cols-sm-6">
  <a href="?url=verifikasi_pengaduan" class="btn btn-primary btn-icon-split">
    <span class="icon text-white=50">
        <i class="fas fa-arrow-left"></i>
    </span>
    <span class="text">
        Kembali
    </span>
  </a>
    <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group cols-sm-6">
            <label>Tanggal Pengaduan</label>
            <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" class="form-control" readonly>
        </div>
        <div class="form-group cols-sm-6">
            <label>NIK</label>
            <input type="text" name="nik" value="<?php echo $_SESSION['nik']; ?>" class="form-control" readonly>
        </div>
        <div class="form-group cols-sm-6">
            <label>Tulis Pengaduan</label>
            <textarea class="form-control" rows="7" name="isi_laporan" readonly><?php echo $data['isi_laporan']; ?></textarea>
        </div>
        <div class="form-group cols-sm-6">
            <label>Bukti Foto</label>
            <div>
            <img src="../image/<?php echo $data['foto'] ?>" width=400 alt="">
            </div>
        </div>
        <?php
    } else {
        // Tampilkan pesan error jika query gagal dieksekusi
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

    // Tutup koneksi database
    mysqli_close($koneksi);
}
?>

    </form>
</  main>