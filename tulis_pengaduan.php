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
          <h5 class="card-title">Silahkan Tulis Laporan Pengaduan Anda Pada Form Dibawah.</h5>

          <form class="row g-3" action="simpan_pengaduan.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="col-md-12">
              <label class="form-label">Tanggal Pengaduan</label>
              <input type="text" name="tgl_pengaduan" value="<?php echo date('d/m/Y'); ?>" class="form-control" disabled>
            </div>
            <div class="col-md-12">
              <label class="form-label">NIK</label>
              <input type="text" name="nik" value="<?php echo $_SESSION['nik'];?>" class="form-control" readonly>
            </div>
            <div class="col-md-12">
              <label class="form-label">Tulis Pengaduan</label>
              <textarea class="form-control" rows="7" name="isi_laporan"></textarea>
            </div>
            <div class="col-md-12">
              <label class="form-label">Unggah Foto</label>
              <input type="file" name="foto" class="form-control" accept=".jpg, .jpeg, .png, .gif">
              <font color="red">*tipe yang bisa di upload adalah : .jpg, .jpeg, .png, .gif</font>
            </div>
              <div class="form-group col-sm-6">
              <input type="submit" value="Simpan" class="btn btn-primary">
              <input type="reset" value="Reset" class="btn btn-secondary">
            </div>
            </div> 
          </form>
        </div>
      </div>
</main>