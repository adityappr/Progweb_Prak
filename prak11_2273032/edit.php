<?php
include "koneksi.php";

$id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("SELECT * FROM siswa WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();

if (!$data) {
    die("Data tidak ditemukan. <a href='index.php'>Kembali</a>");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 620px; margin: 40px auto; border: 1px solid #ddd; padding: 25px; box-shadow: 0 0 8px #ddd; }
        h2 { text-align: center; }
        label { display: block; margin-top: 15px; }
        input { width: 100%; padding: 10px; margin-top: 6px; box-sizing: border-box; }
        .btn { color: white; text-decoration: none; padding: 10px 16px; border-radius: 4px; border: none; display: inline-block; margin-top: 18px; cursor: pointer; }
        .green { background: #31b54a; }
        .blue { background: #168eea; }
    </style>
</head>
<body>
<div class="container">
    <h2>Edit Data Siswa</h2>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required>
        <label>Kelas:</label>
        <input type="text" name="kelas" value="<?= htmlspecialchars($data['kelas']) ?>" required>
        <button class="btn green" type="submit">Update</button>
    </form>
    <a class="btn blue" href="index.php">Kembali</a>
</div>
</body>
</html>
