<body>
<main id="main" class="main">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
            </div>
            <div class="card-body">
            <a href="admin.php?url=tambah_petugas" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                  </a> <br> <br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Petugas</th>
                      <th>Nama Petugas</th>
                      <th>Username</th>
                      <th>Telepon</th>
                      <th>Level</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                    <?php
                    require '../koneksi.php';
        
                        $sql = "SELECT * FROM users WHERE level IN ('Admin', 'Petugas')";
                        $result = mysqli_query($koneksi, $sql);

                              while ($data = mysqli_fetch_array($result)) {
                            ?>
                            <tbody>
                                <tr>
                                  <td><?php echo $data['id']; ?></td>
                                  <td><?php echo $data['nama']; ?></td>
                                  <td><?php echo $data['username']; ?></td>
                                  <td><?php echo $data['telp']; ?></td>
                                  <td><?php echo $data['level']; ?></td>
                                    <td>
                                    <a href="admin.php?url=edit_petugas&id=<?php echo $data['id_petugas']; ?>" class="btn btn-primary btn-circle">
                                    <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="delete_petugas.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Mau Dihapus?')">
                                    <i class="bi bi-trash"></i>
                                    </a>
                                  </tr>
                            </tbody>
                            <?php
                        }

                        mysqli_close($koneksi);
                    ?>
          
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    </main>
