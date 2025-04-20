<?php
include 'db.php';

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk     = $_POST['jenis_kelamin'];
$tgl    = $_POST['tanggal_lahir'];

$sql = "UPDATE siswa 
        SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', tanggal_lahir='$tgl' 
        WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <title>Berhasil</title>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    <body>
        <script>
            Swal.fire({
                title: 'Sukses!',
                text: 'Data berhasil diupdate.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'read.php';
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
        <title>Gagal</title>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    <body>
        <script>
            Swal.fire({
                title: 'Oops!',
                text: 'Terjadi kesalahan saat mengupdate data.',
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
