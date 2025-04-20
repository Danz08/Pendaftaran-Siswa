<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM siswa WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        http_response_code(200);
        echo "Sukses";
    } else {
        http_response_code(500);
        echo "Gagal: " . $conn->error;
    }
} else {
    http_response_code(400);
    echo "ID tidak ditemukan";
}

$conn->close();
?>
