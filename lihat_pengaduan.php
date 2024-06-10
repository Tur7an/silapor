<body>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Lihat Pengaduan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="masyarakat.php">Home</a></li>
          <li class="breadcrumb-item active">Lihat Pengaduan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Pengaduan</h5>

              <!-- Table with stripped rows -->
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
                    require 'koneksi.php';

                    // Pastikan session 'nik' telah diset sebelum menjalankan query
                    if (isset($_SESSION['nik'])) {
                        // Lakukan query
                        $sql = "SELECT * FROM pengaduan WHERE nik='{$_SESSION['nik']}'";
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
                                    <td><a href="?url=detail_pengaduan&id=<?php echo $data['id_pengaduan']?>" class="btn btn-info btn-circle">
                                        <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="?url=lihat_tanggapan&id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="bi bi-eye"></i>
                                        </span>
                                        <span class="text">Lihat Tanggapan</span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php
                        }

                        // Tutup koneksi database
                        mysqli_close($koneksi);
                    }
                    ?>

                </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->