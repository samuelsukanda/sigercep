<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: ../../index.php?session=expired");
    exit();
}

include '../koneksi.php';
$id = isset($_GET['id']) ? $_GET['id'] : null;

if (!$id) {
    echo "ID tidak ditemukan.";
    exit();
}

require_once '../../../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('DejaVu Sans');
$dompdf = new Dompdf($options);

// Fetch data
$sql = "SELECT * FROM data_hardware WHERE id = '$id'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    echo "Data tidak ditemukan.";
    exit();
}

mysqli_free_result($result);
mysqli_close($koneksi);

$imageData = base64_encode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/sigercep/app/dist/img/logo.png'));
$src = 'data:image/png;base64,' . $imageData;

$html = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGERCEP</title>
    <link rel="shortcut icon" href="../../dist/img/rs.png">
    <link rel="stylesheet" href="../../dist/css/pdf.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        @font-face {
            font-family: "DejaVu Sans";
            src: url("../../dist/font/DejaVuSans.ttf") format("truetype");
        }
        body {
            padding: 10px;
            font-family: "DejaVu Sans", sans-serif;
        }
        .heading table {
            width: 100%;
            border-collapse: collapse;
        }
        .heading table td {
            padding: 15px;
        }
        .judul {
            font-size: 12px;
            font-weight: 600;
            text-align: center;
        }
        .nomor {
            font-weight: 400;
            font-size: 9px;
        }
        .imgheader {
            text-align: center;
        }
        .logo {
            max-width: 160px;
            height: auto;
        }
        .form {
            margin-top: 20px;
            margin-bottom: 10px;
            margin-left: 30px;
            line-height: 15px;
        }
        .data-form table,
        .data-form th,
        .data-form td {
            border: 2px solid black;
            padding: 4px;
            margin-bottom: 50px;
        }
        th {
            text-align: center;
        }
        .cek {
            text-align: center;
        }
        .data-form {
            width: 100%;
            font-size: 12px;
            margin-bottom: 30px;
            border-collapse: collapse;
        }
        .data table {
            font-size: 15px;
            border: 0px solid #ccc;
        }
        .data table .head {
            font-weight: 600;
        }
        .data table td {
            border: 0px solid #ccc;
        }
        .footer .footer-table {
            border: none;
            border-collapse: collapse;
        }
        .footer {
            text-align: center;
        }
        .it, .user, .ka-it {
            font-size: 10px;
        }
        .head-it,
        .head-user,
        .head-ka-it {
            font-size: 10px;
            margin-bottom: 70px;
        }
        .nama-it,
        .nama-user,
        .nama-ka-it {
            text-align: center
            margin-right: 70px;
        }
        .head-user {
            margin-left: 240px;
        }
        .user {
            margin-left: 100px;
        }
        .footer-user {
            margin-left: 100px;
        }
        .it {
            margin-right: 50px;
        }
        .head-ka-it, .hamori{
            opacity: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">
            <table class="data-form">
                <tr>
                    <td colspan="3" class="imgheader">
                        <span class="hamori">hamorihamoriham</span>
                    </td>
                    <td colspan="3">
                        <h5 class="judul">
                            CEKLIS PERAWATAN HARDWARE
                            <br>
                            (KOMPUTER CLIENT)
                        </h5>
                    </td>
                    <td>
                        <h5 class="nomor">
                            No. Form: DIR.04.03.07.017
                            <br>
                            No. Revisi: 00
                        </h5>
                    </td>
                </tr>
            </table>
        </div>

        <div class="form">
            <div class="data">
                <table>
                    <tr>
                        <td class="head">Nama Pengguna Komputer</td>
                        <td>: ' . $row['nama'] . '</td>
                    </tr>
                    <tr>
                        <td class="head">Unit</td>
                        <td>: ' . $row['unit'] . '</td>
                    </tr>
                    <tr>
                        <td class="head">Lantai</td>
                        <td>: ' . $row['lantai'] . '</td>
                    </tr>
                    <tr>
                        <td class="head">Hari/Tanggal</td>
                        <td>: ' . date('d-m-Y', strtotime($row['tanggal'])) . '</td>
                    </tr>
                </table>
            </div>
            <br>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <table class="data-form">
                    <tr>
                        <th>No</th>
                        <th>Tindakan</th>
                        <th>Cek</th>
                        <th>Keterangan</th>
                    </tr>';

$fields = [
    'wallpaper' => 'Wallpaper background RS',
    'login' => 'Pastikan login sistem operasi ada dua (admin dan limit)',
    'password' => 'Pastikan password admin dan limit terkontrol',
    'saver' => 'Screen saver jalan',
    'vnc' => 'Aplikasi remote VNC berjalan',
    'folder' => 'Bersihkan folder %tmp% komputer',
    'software' => 'Bersihkan komputer dari software yang tidak diijinkan',
    'hardisk' => 'Cek kapasitas hardisk sistem operasi C',
    'simrs' => 'Jalankan SIMRS HAMORI',
    'ip' => 'IP address sesuai',
    'ping' => 'Ping Local dan Internet berjalan/reply',
    'printer' => 'Printer bisa digunakan',
    'tinta' => 'Catridge terisi tinta',
    'monitor' => 'Cek nyalanya monitor',
    'ups' => 'Cek fungsi UPS',
    'mouse' => 'Cek fungsi Mouse',
    'keyboard' => 'Cek fungsi keyboard',
    'case' => 'Bersihkan Casing bagian dalam dari debu',
    'kabel' => 'Rapihkan pengkabelan',
    'penempatan' => 'Rapikan penempatan',
];

$nomor_urut = 1;
foreach ($fields as $field => $description) {
    $cek = $row[$field . '_cek'] ? '&check;' : '';
    $keterangan = $row[$field . '_text'];
    $html .= "<tr>
                <td>{$nomor_urut}</td>
                <td>{$description}</td>
                <td class='cek'>{$cek}</td>
                <td>{$keterangan}</td>
            </tr>";
    $nomor_urut++;
}

$html .= '
                </table>
            </div>
        </div>

        <div class="footer">
            <table border="0">
                <tr>
                    <td colspan="3">
                        <div class="head-it it">
                            Dilaksanakan Oleh:
                        </div>
                        <div class="footer-it it">
                            (............................................)
                        </div>
                        <div class="footer-it nama-it it">
                            Staff Unit Digitalisasi
                        </div>
                    </td>
                    <td colspan="3">
                        <div class="head-user user">
                            Mengetahui:
                        </div>
                        <div class="footer-user user">
                            (............................................)
                        </div>
                        <div class="footer-user nama-user user">
                            Pengguna Komputer
                        </div>
                    </td>
                    <td colspan="3">
                        <div class="head-ka-it ka-it">
                            Mengetahui:
                        </div>
                        <div class="footer-ka-it ka-it">
                            (............................................)
                        </div>
                        <div class="footer-ka-it nama-ka-it ka-it">
                            Ka. Unit Digitalisasi
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>';

// Load HTML content
$dompdf->loadHtml($html);

// Set paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('Ceklis Perawatan Hardware.pdf', array('Attachment' => 0));
