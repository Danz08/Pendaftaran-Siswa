<?php include 'db.php'; ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <div class="form-container">
    <h2>Formulir Pendaftaran Siswa</h2>
        <form method="POST" action="store.php">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="jk">Jenis Kelamin:</label>
            <select id="jk" name="jenis_kelamin" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" id="tgl_lahir" name="tanggal_lahir" required>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" rows="3" required></textarea>

            <input type="submit" class="submit-btn" value="Daftar">
        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
