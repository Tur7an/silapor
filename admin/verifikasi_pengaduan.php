<body id="page-top">
<main id="main" class="main">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tanggal</th>
                      <th>NIK</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                    <?php
                    require '../koneksi.php';
                    // Pastikan session 'nik' telah diset sebelum menjalankan query
                        // Lakukan query
                        $sql = "SELECT * FROM pengaduan WHERE status='proses'";
                        $result = mysqli_query($koneksi, $sql);

                        // Tampilkan hasil query dalam tabel
                        while ($data = mysqli_fetch_array($result)) {
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $data['id_pengaduan']; ?></td>
                                    <td><?php echo $data['tgl_pengaduan']; ?></td>
                                    <td><?php echo $data['nik']; ?></td>
                                    <td><?php echo $data['isi_laporan']; ?></td>
                                    <td><?php echo $data['foto']; ?></td>
                                    <td><?php echo $data['status']; ?></td>
                                    <td><a href="?url=detail_pengaduan&id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-info"></i>
                                        </span>
                                        <span class="text">Lihat Tanggapan</span>
                                        </a>
                                        <a href="?url=tanggapan&id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Tanggapi</span>
                                    </td>
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
