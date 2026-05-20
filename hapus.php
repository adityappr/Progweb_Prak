<?php
include "koneksi.php";

$id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("DELETE FROM siswa WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php");
exit;
?>
