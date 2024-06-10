<?php
require 'koneksi.php';

// Periksa apakah metode request adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil tanggal saat ini
    $tgl = date('Y/m/d');

    // Ambil nilai dari form
    $nik = $_POST['nik'];
    $isi = $_POST['isi_laporan'];
    
    // Dapatkan informasi file foto
    $foto_name = $_FILES['foto']['name'];
    $foto_tmp = $_FILES['foto']['tmp_name'];

    // Tentukan status default
    $sts = 'Menunggu Konfirmasi';

    // Pindahkan file foto ke direktori tujuan
    $foto_destination = "image/" . $foto_name;
    move_uploaded_file($foto_tmp, $foto_destination);

    // Query SQL tanpa prepared statement
    $sql = "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status) VALUES ('$tgl', '$nik', '$isi', '$foto_name', '$sts')";
    
    // Eksekusi query
    if (mysqli_query($koneksi, $sql)) {
        ?>
        <script type="text/javascript">
            alert('Data berhasil disimpan, Terimakasih telah membuat laporan');
            window.location="masyarakat.php";
        </script>
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

    // Tutup koneksi database
    mysqli_close($koneksi);
}
?>
