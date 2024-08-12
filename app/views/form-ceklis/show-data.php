<?php

if (!isset($_SESSION)) {
    session_start();
}

include('../../access.php')
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIGERCEP</title>

    <!-- Shortcut -->
    <link rel="shortcut icon" href="../../dist/img/rs.png">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../../dist/css/pdf.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        @media screen and (min-width: 992px) {
            table {
                width: 100%;
                font-size: 18px;
            }
        }

        @media (max-width: 767px) {
            table {
                width: 100%;
                font-size: 11px;
            }
        }

        body {
            padding: 10px;
            font-family: 'Poppins', sans-serif;
        }

        /* Header */
        .heading table {
            width: 100%;
            border-collapse: collapse;
        }

        .heading table td {
            padding: 15px;
        }

        .judul {
            font-weight: 600;
            text-align: center;
        }

        .nomor {
            font-size: 13px;

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

        .data-form {
            margin-bottom: 50px;
        }

        .data-form table,
        .data-form th,
        .data-form td {
            border: 2px solid black;
            padding: 6px;
            margin-bottom: 50px;
        }

        th {
            text-align: center;
        }

        .cek {
            text-align: center;
        }

        .data table {
            font-size: 15px;

            width: 50%;
            border: 0px solid #ccc;
        }

        .data table .head {
            font-weight: 600;
        }

        .data table td {
            padding: 8px;
            border: 0px solid #ccc;
        }

        .footer .footer-table {
            border: none;
            border-collapse: collapse;
        }

        .footer {
            text-align: center;
            padding-bottom: 30px;
        }

        .head-it,
        .head-user,
        .head-ka-it {
            margin-bottom: 100px;
        }

        .head-user {
            margin-left: 300px;
        }

        .footer-user {
            margin-left: -50px;
        }

        .footer-ka-it {
            margin-left: -150px;
        }

        .head-ka-it {
            opacity: 0;
        }

        .card-footer {
            padding: 40px;
            background-color: whitesmoke;
            margin-top: 70px;
            text-align: start;
        }
    </style>
</head>

<?php
include '../koneksi.php';
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
} else {
    echo "ID tidak ditemukan.";
    exit();
}

mysqli_close($koneksi);

?>

<body>
    <div class="container">

        <div class="heading">
            <table class="data-form">
                <tr>
                    <td colspan="3" class="imgheader">
                        <a href="../../index.php">
                            <img class="logo" src="../../dist/img/logo.png" alt="Logo Hamori">
                        </a>
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

        <?php
        include '../koneksi.php';
        $id = isset($_GET['id']) ? $_GET['id'] : null;

        if ($id) {
            $sql = "SELECT * FROM data_hardware WHERE id = '$id'";
            $result = mysqli_query($koneksi, $sql);

            if ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="form" style="margin-top: 20px;">';

                $tanggal = date('d-m-Y', strtotime($row['tanggal']));

                echo "
                    <div class='data'>
                        <table>
                            <tr>
                                <td class='head'>Nama Pengguna Komputer</td>
                                <td>: " . $row['nama'] . "</td>
                            </tr>
                            <tr>
                                <td class='head'>Unit</td>
                                <td>: " . $row['unit'] . "</td>
                            </tr>
                            <tr>
                                <td class='head'>Lantai</td>
                                <td>: " . $row['lantai'] . "</td>
                            </tr>
                            <tr>
                                <td class='head'>Hari/Tanggal</td>
                                <td>: " . $tanggal . "</td>
                            </tr>
                        </table>
                    </div>
                    <br>";

                echo '</div>';
            } else {
                echo "Tidak ada data yang ditemukan.";
            }

            mysqli_free_result($result);
        } else {
            echo "ID tidak ditemukan.";
        }

        mysqli_close($koneksi);
        ?>


        <div class="row">
            <div class="col-md-12 mx-auto">
                <?php
                include '../koneksi.php';
                $id = isset($_GET['id']) ? $_GET['id'] : null;

                if ($id) {
                    $sql = "SELECT * FROM data_hardware WHERE id = '$id'";
                    $result = mysqli_query($koneksi, $sql);

                    if ($row = mysqli_fetch_assoc($result)) {
                        echo "<table class='col-md-12 data-form'>
                                    <tr>
                                        <th>No</th>
                                        <th>Tindakan</th>
                                        <th>Cek</th>
                                        <th>Keterangan</th>
                                    </tr>";

                        $nomor_urut = 1;
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

                        foreach ($fields as $field => $description) {
                            $cek = $row[$field . '_cek'] ? '✓' : '';
                            $keterangan = $row[$field . '_text'];
                            echo "<tr>
                                    <td>{$nomor_urut}</td>
                                    <td>{$description}</td>
                                    <td class='cek'>{$cek}</td>
                                    <td>{$keterangan}</td>
                                </tr>";
                            $nomor_urut++;
                        }

                        echo "</table>";
                    } else {
                        echo "Data tidak ditemukan.";
                    }
                } else {
                    echo "ID tidak valid.";
                }

                mysqli_close($koneksi);
                ?>
            </div>
        </div>

        <div class="footer">
            <table border="0">
                <tr>
                    <td colspan="3">
                        <div class="head-it">
                            Dilaksanakan Oleh:
                        </div>
                        <div>
                            (............................................)
                        </div>
                        <div class="footer-it">
                            Staff Unit Digitalisasi
                        </div>
                    </td>
                    <td colspan="3">
                        <div class="head-user">
                            Mengetahui:
                        </div>
                        <div class="footer-user">
                            (............................................)
                        </div>
                        <div class="footer-user">
                            Pengguna Komputer
                        </div>
                    </td>
                    <td colspan="3">
                        <div class="head-ka-it">
                            Mengetahui:
                        </div>
                        <div class="footer-ka-it">
                            (............................................)
                        </div>
                        <div class="footer-ka-it">
                            Ka. Unit Digitalisasi
                        </div>
                    </td>
                </tr>
            </table>
            <div class="card-footer">
                <a href="pdf.php?id=<?php echo $id; ?>" class="btn btn-primary" style="margin-left: -17px;">Print</a>
                <a href="data-hardware.php" class="btn btn-primary">Tampilkan Data</a>
            </div>
        </div>
    </div>
</body>

</html>