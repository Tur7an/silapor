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
    <form action="#" method="post" class="row g-3" enctype="multipart/form-data">

    <?php
require 'koneksi.php';

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
        <div class="col-md-12">
            <label class="form-label">Tanggal Pengaduan</label>
            <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" class="form-control" disabled>
        </div>
        <div class="col-md-12">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" value="<?php echo $_SESSION['nik']; ?>" class="form-control" readonly>
        </div>
        <div class="col-md-12">
            <label class="form-label">Tulis Pengaduan</label>
            <textarea class="form-control" rows="7" name="isi_laporan" readonly><?php echo $data['isi_laporan']; ?></textarea>
        </div>
        <div class="col-md-12">
            <label class="form-label">Bukti Foto</label>
            <div>
            <img src="image/<?php echo $data['foto'] ?>" width=400 alt="">
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
    </main>
