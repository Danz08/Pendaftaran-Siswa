<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM siswa WHERE id=$id");
$data = $result->fetch_assoc();
?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
<h2>Edit Data Siswa</h2>
    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>

        <label for="jk">Jenis Kelamin:</label>
        <select id="jk" name="jenis_kelamin" required>
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="Laki-laki" <?php if ($data['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
            <option value="Perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
        </select>

        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" id="tgl_lahir" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" required>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="3" required><?php echo $data['alamat']; ?></textarea>

        <input type="submit" class="submit-btn" value="Update">
        <a href="read.php" class="cancel-btn">Batal</a>
    </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
