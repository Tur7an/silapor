<body>
<main id="main" class="main">
<div class="card shadow">
  <div class="card-header">
    Detail Pengaduan
  </div>
  <div class="card-body">
  <div class="form-group cols-sm-6">
  <a href="?url=lihat_pengaduan" class="btn btn-primary btn-icon-split">
    <span class="icon-text-white=50">
        <i class="fas fa-arrow-left"></i>
    </span>
    <span class="text">
        Kembali
    </span>
  </a>
  </div>
    <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">

    <?php
require 'koneksi.php';

// Pastikan parameter 'id' telah diset sebelum menjalankan query
if (isset($_GET['id'])) {
    // Lakukan query
    $sql = "SELECT * FROM pengaduan, tanggapan WHERE tanggapan.id_pengaduan='{$_GET['id']}' AND tanggapan.id_pengaduan=pengaduan.id_pengaduan";
    $result = mysqli_query($koneksi, $sql);

    // Periksa apakah query berhasil dieksekusi
    $cek = mysqli_num_rows($result);
    if ($cek < 1) {
        // Tampilkan pesan jika pengaduan belum ditanggapi
        echo "<font color='red'>Mohon ditunggu, pengaduan belum ditanggapi</font>";
    } else {
        // Ambil data dari hasil query
        if ($data = mysqli_fetch_array($result)) {
            ?>
            <div class="form-group cols-sm-6">
                <label>Tanggal Tanggapan</label>
                <input type="text" name="tgl_tanggapan" value="<?php echo $data['tgl_tanggapan']; ?>" class="form-control" readonly>
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
                <label>Isi Tanggapan</label>
                <textarea class="form-control" rows="7" name="tanggapan" readonly><?php echo $data['tanggapan']; ?></textarea>
            </div>

            <div class="form-group col-sm-6">
                <input type="submit" value="Simpan" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-secondary">
            </div>
            <?php
        }
    }

    // Tutup koneksi database
    mysqli_close($koneksi);
}
?>


    </form>
</main>
