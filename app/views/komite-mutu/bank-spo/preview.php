<?php
$pdfId = $_GET['id'];

include "../../koneksi.php";

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$query = "SELECT file_path FROM data_bank_spo WHERE id = $pdfId";
$result = $koneksi->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $filePath = $row['file_path'];
    $filename = basename($filePath);

    header('Content-type: application/pdf');
    header('Content-disposition: inline; filename="' . $filename . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    readfile($filePath);
} else {
    echo "File PDF tidak ditemukan.";
}
?>
