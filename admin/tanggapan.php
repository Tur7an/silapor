<body id="page-top">
<main id="main" class="main">
<div class="pagetitle">
    <h1>Tanggapan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
        <li class="breadcrumb-item"><a href="?url=verifikasi_pengaduan">Verifikasi Pengaduan</a></li>
        <li class="breadcrumb-item active">Tanggapan</li>
      </ol>
    </nav>
  </div>

  <section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tanggapan</h5>
            <a href="?url=verifikasi_pengaduan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white=50">
                <i class="bi bi-arrow-left"></i>
            </span>
    <span class="text">
        Kembali
    </span>
  </a>
    <form action="simpan_tanggapan.php" method="post" class="row g-3" enctype="multipart/form-data">
    <div class="col-md-12"><br>
            <label class="form-label">ID Pengaduan</label>
            <input type="text" name="id_pengaduan" value="<?php echo $_GET['id']; ?>" class="form-control" readonly>
        </div>  
      <div class="col-md-12">
            <label class="form-label">Tanggal Tanggapan</label>
            <input type="text" name="tgl_tanggapan" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
        </div>
        <div class="col-md-12">
            <label class="form-label">Tulis Tanggapan</label>
            <textarea class="form-control" rows="7" name="tanggapan"></textarea>
        </div>
        <div class="col-md-12">
            <label class="form-label">ID Petugas</label>
            <input type="text" name="id" value="<?php echo $_SESSION['id'];?>" class="form-control" readonly>
        </div>
        <input type="submit" class="btn btn-primary btn-user" value="Tanggapi">
    </form>
</main>