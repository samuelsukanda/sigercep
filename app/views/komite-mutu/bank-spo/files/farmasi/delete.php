<?php
include '../../../../koneksi.php';

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];

    $query = "DELETE FROM data_bank_spo WHERE id = $id";

    if ($koneksi->query($query) === TRUE) {
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
} else {
    echo "Metode HTTP yang digunakan bukan GET";
}

$koneksi->close();
?>
