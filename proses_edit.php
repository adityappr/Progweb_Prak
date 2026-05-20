<?php
include "koneksi.php";

$id = $_POST['id'] ?? 0;
$nama = $_POST['nama'] ?? '';
$kelas = $_POST['kelas'] ?? '';

$stmt = $conn->prepare("UPDATE siswa SET nama = ?, kelas = ? WHERE id = ?");
$stmt->bind_param("ssi", $nama, $kelas, $id);
$stmt->execute();

header("Location: index.php");
exit;
?>
