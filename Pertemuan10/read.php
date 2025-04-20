<?php include 'db.php'; ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function deleteData(id) {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                const xhr = new XMLHttpRequest();
                xhr.open("GET", "delete.php?id=" + id, true);
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        document.getElementById('siswa-' + id).remove();
                        Swal.fire(
                            'Terhapus!',
                            'Data siswa telah dihapus.',
                            'success'
                        );
                    } else {
                        Swal.fire(
                            'Gagal!',
                            'Terjadi kesalahan saat menghapus data.',
                            'error'
                        );
                    }
                };
                xhr.send();
            }
        });
    }
    </script>
</head>
<body>
<div class="table-wrapper">
    <h2 id="edit">Siswa Terdaftar</h2>
    <table>
        <tr><th>Nama</th><th>Alamat</th><th>Jenis Kelamin</th><th>Tanggal Lahir</th><th>Aksi</th></tr>
        <?php
        $result = $conn->query("SELECT * FROM siswa");
        while ($row = $result->fetch_assoc()) {
            echo "<tr id='siswa-{$row['id']}'>
                <td>{$row['nama']}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['jenis_kelamin']}</td>
                <td>{$row['tanggal_lahir']}</td>
                <td class='table-actions'>
                    <a href='edit.php?id={$row['id']}'>Edit</a>
                    <a href='#' onclick='deleteData({$row['id']}); return false;'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</div>
</body>
<?php include 'footer.php'; ?>
</html>
