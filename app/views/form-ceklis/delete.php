<?php

include '../koneksi.php';

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "DELETE FROM data_hardware WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);

if ($result) {
  header("Location: {$_SERVER['HTTP_REFERER']}");
  exit();
} else {
  echo "Gagal menghapus data: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
