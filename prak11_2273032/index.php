<?php
include "koneksi.php";
$result = $conn->query("SELECT * FROM siswa ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fff; }
        .container { width: 720px; margin: 40px auto; border: 1px solid #ddd; padding: 25px; box-shadow: 0 0 8px #ddd; }
        h2 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 12px; border-bottom: 1px solid #ddd; text-align: left; }
        th { background: #f1f1f1; }
        .btn { color: white; text-decoration: none; padding: 8px 14px; border-radius: 4px; display: inline-block; border: none; cursor: pointer; }
        .green { background: #31b54a; }
        .blue { background: #168eea; }
        .red { background: #f23b32; }
    </style>
</head>
<body>
<div class="container">
    <h2>Data Siswa</h2>
    <a href="tambah.php" class="btn green">Tambah Data</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['nama']) ?></td>
            <td><?= htmlspecialchars($row['kelas']) ?></td>
            <td>
                <a class="btn blue" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                <a class="btn red" href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>
