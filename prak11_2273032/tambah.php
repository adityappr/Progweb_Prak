<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Siswa</title>
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
    <h2>Tambah Data Siswa</h2>
    <form action="proses_tambah.php" method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>Kelas:</label>
        <input type="text" name="kelas" required>
        <button class="btn green" type="submit">Simpan</button>
    </form>
    <a class="btn blue" href="index.php">Kembali</a>
</div>
</body>
</html>
