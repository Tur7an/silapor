<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];
    switch($url)
    {
        case 'verifikasi_pengaduan';
        include 'verifikasi_pengaduan.php';
        break;

        case 'detail_pengaduan';
        include 'detail_pengaduan.php';
        break;

        case 'profile';
        include 'profile.php';
        break;
    }
}
else
{
    ?>
    <?php
    require '../koneksi.php';
    $sql = "SELECT * FROM pengaduan WHERE status='Menunggu Konfirmasi'";
    $result = mysqli_query($koneksi, $sql);
    
    if ($result) {
        $cek = mysqli_num_rows($result);
    
        if ($cek > 0) {
    ?>

    
<main id="main" class="main">
<section class="section dashboard">
      <div class="row">

        <div class="col-lg-12">
          <div class="row">

            <div class="col-xxl-12 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Laporan Pengaduan</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-chat-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Ada <?php echo $cek; ?> Laporan dari Masyarakat</h6>
                      <span class="text-danger small pt-1 fw-bold"><?php echo $cek; ?></span> <span class="text-muted small pt-2 ps-1">Laporan dari Masyarakat Perlu di Konfirmasi</span>
                    </div>
                  </div>

                </div>
              </div>

            </div>
<?php
$query = "SELECT DATE(tgl_pengaduan) as tanggal, COUNT(*) as jumlah 
          FROM pengaduan 
          WHERE tgl_pengaduan >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
          GROUP BY DATE(tgl_pengaduan)";
$result = mysqli_query($koneksi, $query);

$dates = [];
$counts = [];

while ($row = mysqli_fetch_assoc($result)) {
    $dates[] = $row['tanggal'];
    $counts[] = $row['jumlah'];
}

$dates_json = json_encode($dates);
$counts_json = json_encode($counts);

mysqli_close($koneksi);
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Jumlah Laporan 1 Minggu Terakhir</h5>

            <div id="barChart" style="min-height: 400px;" class="echart"></div>

            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const dates = <?php echo $dates_json; ?>;
                    const counts = <?php echo $counts_json; ?>;

                    echarts.init(document.querySelector("#barChart")).setOption({
                        xAxis: {
                            type: 'category',
                            data: dates
                        },
                        yAxis: {
                            type: 'value'
                        },
                        series: [{
                            data: counts,
                            type: 'bar'
                        }]
                    });
                });
            </script>
        </div>
    </div>
</div>
            </div>
          </div>
        </div>
        </main>
<?php
}
}
}
?>