<?php
include 'db.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$nama = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$tgl = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO siswa (nama, jenis_kelamin, tanggal_lahir, alamat) 
        VALUES ('$nama', '$jk', '$tgl', '$alamat')";

if ($conn->query($sql) === TRUE) {
    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    <body>
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: 'Pendaftaran berhasil disimpan!',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'index.php';
            });
        </script>
    </body>
    </html>
    ";
} else {
    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    <body>
        <script>
            Swal.fire({
                title: 'Gagal!',
                text: 'Error: " . addslashes($conn->error) . "',
                icon: 'error',
                confirmButtonText: 'Kembali'
            }).then(() => {
                window.history.back();
            });
        </script>
    </body>
    </html>
    ";
}

$conn->close();
?>
