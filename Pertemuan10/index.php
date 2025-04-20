<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'header.php'; ?>
</head>
<body>
    <section class="hero">
        <div class="hero-content">
            <h1>Selamat Datang di Website Pendaftaran Siswa</h1>
            <p>Silakan mendaftarkan siswa baru atau lihat data siswa yang sudah terdaftar.</p>
            <div class="hero-buttons">
                <a href="create.php" class="btn-primary">Daftar Siswa Baru</a>
                <a href="read.php" class="btn-secondary">Lihat Data Siswa</a>
            </div>
        </div>
    </section>
</body>
<?php include 'footer.php'; ?>
</html>
