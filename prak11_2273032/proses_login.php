<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Proses Login</title>
    <style>
        body { font-family: Georgia, serif; font-size: 26px; margin: 40px; }
        a { color: purple; }
        .admin { color: blue; font-size: 42px; font-weight: bold; }
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>
<?php if ($username === "admin" && $password === "admin") : ?>
    <h2>Login berhasil!</h2>
    <h2>Selamat datang, <span class="admin">admin.</span></h2>
<?php else : ?>
    <p class="error">Username : <?= htmlspecialchars($username) ?> Tidak Terdaftar!</p>
<?php endif; ?>
    <a href="login.php">kembali ke halaman login</a>
</body>
</html>
