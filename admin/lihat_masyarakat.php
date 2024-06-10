<body>
<main id="main" class="main">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Masyarakat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>No WhatsApp</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                    <?php
                    require '../koneksi.php';
                    // Pastikan session 'nik' telah diset sebelum menjalankan query
                        // Lakukan query
                        $sql = "SELECT * FROM masyarakat";
                        $result = mysqli_query($koneksi, $sql);

                        // Tampilkan hasil query dalam tabel
                        while ($data = mysqli_fetch_array($result)) {
                            ?>
                            <tbody>
                                <tr>
                                  <td><?php echo $data['nik']; ?></td>
                                  <td><?php echo $data['nama']; ?></td>
                                  <td><a href=""><?php echo $data['telp']; ?></a></td>
                                    <td>
                                    <a href="delete_masyarakat.php?nik=<?php echo $data['nik']; ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Mau Dihapus?')">
                                    <i class="bi bi-trash"></i>
                                    </a>
                                  </tr>
                            </tbody>
                            <?php
                        }

                        // Tutup koneksi database
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