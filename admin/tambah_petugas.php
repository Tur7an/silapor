<body>
<main id="main" class="main">
<div class="pagetitle">
  <h1>Tambah Petugas</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
      <li class="breadcrumb-item"><a href="?url=lihat_petugas">Data Petugas</a></li>
      <li class="breadcrumb-item active">Tambah Petugas</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tambah Petugas</h5>

    <form class="row g-3" action="simpan_petugas.php" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <label class="form-label">Nama Petugas</label>
        <input type="text" name="nama" class="form-control">
      </div>
      <div class="form-group cols-sm-6">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control">
      </div>
      <div class="form-group cols-sm-6">
        <label class="form-label">password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <div class="form-group cols-sm-6">
        <label class="form-label">No WhatsApp</label>
        <input type="text" name="telp" class="form-control">
      </div>
      <div class="form-group cols-sm-6">
        <label class="form-label">Role</label>
        <select class="form-control" name="level">
        <option>--Pilih--</option>
        <option value="Admin">Admin</option>
        <option value="Petugas">Petugas</option>
        </select>
      </div>
      <div class="form-group col-sm-6">
        <input type="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" value="Reset" class="btn btn-secondary">
    </form>
</main>