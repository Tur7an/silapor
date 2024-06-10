<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];
    switch($url)
    {
        case 'tulis_pengaduan';
        include 'tulis_pengaduan.php';
        break;

        case 'lihat_pengaduan';
        include 'lihat_pengaduan.php';
        break;

        case 'detail_pengaduan';
        include 'detail_pengaduan.php';
        break;
        
        case 'lihat_tanggapan';
        include 'lihat_tanggapan.php';
        break;

        case 'profile';
        include 'profile.php';
        break;
    }
}
else
{
    ?>
            <main id="main" class="main">

            <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="masyarakat.php">Home</a></li>
                </ol>
            </nav>
            </div>

            <section class="section">
                <div class="row">
                <div class="col-lg-12">

                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Selamat Datang <b> "<?php echo $_SESSION['nama'];?>" </b>di Aplikasi Pelaporan Pengaduan Masyarakat.</h5>
                    <p>Kamu dapat melaporkan kejadian atau peristiwa di sekitarmu di halaman <a href="tulis_pengaduan.php">Tulis Pengaduan.</a></p>
                    <p>Laporan yang kamu buat dapat dilihat statusnya di halaman <a href="lihat_pengaduan.php">Lihat Pengaduan</a></p>
                </div>
                </div>

                        </div>
                    </div>
                </div>
            </section>

            </main><!-- End #main -->
            <b> 
<?php    
}
?>