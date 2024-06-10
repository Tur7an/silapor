<body>
<main id="main" class="main">
<div class="pagetitle">
  <h1>Edit Petugas</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
      <li class="breadcrumb-item"><a href="?url=lihat_petugas">Data Petugas</a></li>
      <li class="breadcrumb-item active">Edit Petugas</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Petugas</h5>
          <?php
          require '../koneksi.php';

              $sql = "SELECT * FROM pengaduan";
              $result = mysqli_query($koneksi, $sql);

              while ($data = mysqli_fetch_array($result)) {
          ?>
    <form class="row g-3" action="simpan_petugas.php" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>">
      </div>
      <div class="form-group cols-sm-6">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $data['username'] ?>">
      </div>
      <div class="form-group cols-sm-6">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" value="<?php echo $data['password'] ?>">
      </div>
      <div class="form-group cols-sm-6">
        <label class="form-label">No WhatsApp</label>
        <input type="text" name="telp" class="form-control" value="<?php echo $data['telp'] ?>">
      </div>
      <div class="form-group cols-sm-6">
        <label class="form-label">Role</label>
        <select class="form-control" name="level">
          <option value="Admin" <?php echo ($data['level'] == 'Admin') ? 'selected' : ''; ?>>Admin</option>
          <option value="Petugas" <?php echo ($data['level'] == 'Petugas') ? 'selected' : ''; ?>>Petugas</option>
        </select>
      </div>
      <div class="form-group col-sm-6">
        <input type="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" value="Reset" class="btn btn-secondary">
    </form>
    <?php
                        }
                        mysqli_close($koneksi);
                    
                    ?>
</main>
