<?php
$pdfId = $_GET['id'];

include "../../koneksi.php";

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$query = "SELECT file_path FROM data_bank_spo WHERE id = $pdfId";
$result = $koneksi->query($query);

if (isset($_GET['file'])) {
    $file_name = basename($_GET['file']);
    $file_path = 'upload/' . $file_name;

    if (file_exists($file_path)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $file_name . '"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_path));
        ob_clean();
        flush();
        readfile($file_path);
        exit;
    } else {
        echo '<div class="alert alert-danger alert-dismissible">
            <h5><i class="icon fas fa-check"></i> Error!</h5>
            File tidak ditemukan.
            </div>';
    }
} else {
    echo '<div class="alert alert-danger alert-dismissible">
        <h5><i class="icon fas fa-check"></i> Error!</h5>
        Tidak ada file yang diminta.
        </div>';
}
?>
