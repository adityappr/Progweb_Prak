<?php
include "koneksi.php";

$nama = $_POST['nama'] ?? '';
$kelas = $_POST['kelas'] ?? '';

$stmt = $conn->prepare("INSERT INTO siswa (nama, kelas) VALUES (?, ?)");
$stmt->bind_param("ss", $nama, $kelas);
$stmt->execute();

header("Location: index.php");
exit;
?>
