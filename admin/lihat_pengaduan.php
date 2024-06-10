<body>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Lihat Pengaduan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
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
                      <th>Status</th>
                    </tr>
                  </thead>
                  <?php
                    require '../koneksi.php';

                        $sql = "SELECT * FROM pengaduan";
                        $result = mysqli_query($koneksi, $sql);

                        while ($data = mysqli_fetch_array($result)) {
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $data['id_pengaduan']; ?></td>
                                    <td><?php echo $data['tgl_pengaduan']; ?></td>
                                    <td><?php echo $data['nik']; ?></td>
                                    <td><?php echo $data['status']; ?></td>
                                </tr>
                            </tbody>
                            <?php
                        }
                        mysqli_close($koneksi);
                    
                    ?>

                </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->