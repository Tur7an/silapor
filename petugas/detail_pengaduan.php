<body>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Tulis Pengaduan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Tulis Pengaduan</li>
      </ol>
    </nav>
  </div>

  <section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Detail Pengaduan</h5>
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
  <a href="?url=verifikasi_pengaduan" class="btn btn-primary btn-icon-split">
    <span class="icon text-white=50">
        <i class="bi bi-arrow-left-circle"></i>
    </span>
    <span class="text">
        Kembali
    </span>
  </a>

  <a href="proses.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-success btn-icon-split" onclick="return confirm('Yakin Akan Diproses?')">
    <span class="icon text-white=50">
        <i class="bi bi-check-circle"></i>
    </span>
    <span class="text">
        Proses Verifikasi
    </span>
  </a>

  <a href="ditolak.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Yakin Akan Ditolak?')">
    <span class="icon text-white=50">
        <i class="bi bi-x-circle"></i>
    </span>
    <span class="text">
        Tolak Laporan
    </span>
  </a>
  <br><br>
    <form action="#" method="post" class="row g-3" enctype="multipart/form-data">
        <div class="col-md-12">
            <label class="form-label">Tanggal Pengaduan</label>
            <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" class="form-control" readonly>
        </div>
        <div class="col-md-12">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" value="<?php echo $data['nik']; ?>" class="form-control" readonly>
        </div>
        <div class="col-md-12">
            <label class="form-label">Tulis Pengaduan</label>
            <textarea class="form-control" rows="7" name="isi_laporan" readonly><?php echo $data['isi_laporan']; ?></textarea>
        </div>
        <div class="col-md-12">
            <label class="form-label">Bukti Foto</label>
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