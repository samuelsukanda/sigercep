<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: ../../index.php?session=expired");
    exit();
}

include('../../access.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SIGERCEP</title>

    <!-- Icon Shortcut -->
    <link rel="shortcut icon" href="../../dist/img/rs.png">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../../dist/css/style.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <link rel="stylesheet" href="../../plugins/fpdf/fpdf.php">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../../vendor/autoload.php">
    <!-- Sweat Alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

    <style>
        .signature {
            margin-top: 20px;
            text-align: end;
        }

        table,
        th,
        td {
            border: 2px solid black;
            padding: 6px;
        }

        th {
            text-align: center;
        }

        input[type="checkbox"] {
            margin-left: 30px;
        }

        input[type="text"] {
            width: 100%;
        }

        label {
            margin-top: 10px;
        }

        .AllCheck {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-bottom: 10px;
        }

        .AllCheck label {
            font-size: 17px;
            margin-left: 5px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                        <?php echo $_SESSION['nama'] . ' | ' . $_SESSION['level']; ?> </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="../../logout.php" class="dropdown-item">
                            <i class="fas fa-arrow-right mr-2"></i>Log Out
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index.php" class="brand-link">
                <img src="../../dist/img/rs.png" alt="Logo Hamori" class="brand-image" style="border-style: solid 1px white" />
                <span class="brand-text font-weight">SIGERCEP</span>
            </a>
            <!-- Brand Logo -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">Menu</li>

                        <?php if ($menu['komplain']) : ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-wrench"></i>
                                    <p>
                                        Komplain
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../komplain/ipsrs/komplain-ipsrs.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>IPSRS</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../komplain/outsourcing-vendor/outsourcing-vendor.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Outsourcing & Vendor</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../komplain/makanan/komplain-makanan.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Makanan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if ($menu['reservasi']) : ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-paperclip"></i>
                                    <p>
                                        Reservasi
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../reservasi/ruangan/reservasi-ruangan.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Ruangan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../reservasi/kendaraan/reservasi-kendaraan.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Kendaraan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if ($menu['desain_grafis']) : ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-palette"></i>
                                    <p>
                                        Desain Grafis
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../desain-grafis/desain-grafis.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Desain Grafis</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if ($menu['k3rs']) : ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-radiation"></i>
                                    <p>
                                        K3RS
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../kecelakaan-kerja/kecelakaan-kerja.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Kecelakaan Kerja</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if ($menu['komite_mutu']) : ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-leaf"></i>
                                    <p>
                                        Komite Mutu
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../komite-mutu/mutu/mutu.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Mutu</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../komite-mutu/bank-spo/bank-spo.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Bank SPO</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../komite-mutu/manajemen-risiko/manajemen-resiko.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manajemen Resiko</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if ($menu['kesiapan_ambulance']) : ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-notes-medical"></i>
                                    <p>
                                        Kesiapan Ambulance
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../kesiapan-ambulance/kesiapan-ambulance.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Kesiapan Ambulance</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if ($menu['toner']) : ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-print"></i>
                                    <p>
                                        Toner
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../toner/toner.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Toner</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if ($menu['visitasi']) : ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-paper-plane"></i>
                                    <p>
                                        Visitasi
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../visitasi/visitasi.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Visitasi</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if ($menu['peminjaman']) : ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-hand-holding"></i>
                                    <p>
                                        Peminjaman
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../peminjaman/peminjaman.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Peminjaman</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if ($menu['hardware']) : ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-server"></i>
                                    <p>
                                        Hardware
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../form-ceklis/hardware.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Hardware</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                                <li class="breadcrumb-item active">Hardware</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Ceklis Perawatan Hardware</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form id="form" method="POST" action="proses-hardware.php">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nama">Nama Pengguna Komputer:</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="unit">Unit:</label>
                                            <select class="form-control select2bs4" id="unit" name="unit" style="width: 100%;">
                                                <option selected disabled>Pilih Unit</option>
                                                <option value="Admisi dan Billing">Admisi dan Billing</option>
                                                <option value="Akuntansi">Akuntansi</option>
                                                <option value="Casemix">Casemix</option>
                                                <option value="CSSD">CSSD</option>
                                                <option value="Customer Service">Customer Service</option>
                                                <option value="Desain Grafis">Desain Grafis</option>
                                                <option value="Direktur RS">Direktur RS</option>
                                                <option value="Dokter">Dokter</option>
                                                <option value="Farmasi">Farmasi</option>
                                                <option value="Fisioterapi">Fisioterapi</option>
                                                <option value="Gudang">Gudang</option>
                                                <option value="Gizi">Gizi</option>
                                                <option value="HMA">HMA</option>
                                                <option value="ICU">ICU</option>
                                                <option value="ISS">ISS</option>
                                                <option value="IT">IT</option>
                                                <option value="Kesehatan Lingkungan">Kesehatan Lingkungan</option>
                                                <option value="Kanit">Kanit</option>
                                                <option value="Keuangan">Keuangan</option>
                                                <option value="Komite Medik">Komite Medik</option>
                                                <option value="Komite Mutu">Komite Mutu</option>
                                                <option value="Laboratorium">Laboratorium</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Maintenance">Maintenance</option>
                                                <option value="NICU dan PICU">NICU dan PICU</option>
                                                <option value="NS Poli">NS Poli</option>
                                                <option value="OK">OK</option>
                                                <option value="Operator">Operator</option>
                                                <option value="Pengadaan">Pengadaan</option>
                                                <!-- <option value="Pengendali Lapangan">Pengendali Lapangan</option> -->
                                                <option value="Perawat">Perawat</option>
                                                <option value="Rawat Inap">Rawat Inap</option>
                                                <option value="Radiologi">Radiologi</option>
                                                <option value="Rekam Medis">Rekam Medis</option>
                                                <option value="Sekretaris">Sekretaris</option>
                                                <option value="Security">Security</option>
                                                <option value="SDM">SDM</option>
                                                <option value="SPV">SPV</option>
                                                <option value="UGD">UGD</option>
                                                <option value="VK">VK</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="lantai">Lantai:</label>
                                            <select class="form-control select2bs4" id="lantai" name="lantai" style="width: 100%;">
                                                <option selected disabled>Pilih Lantai</option>
                                                <option value="Lantai 1">Lantai 1</option>
                                                <option value="Lantai 2">Lantai 2</option>
                                                <option value="Lantai 3">Lantai 3</option>
                                                <option value="Lantai 4">Lantai 4</option>
                                                <option value="Lantai 5">Lantai 5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal">Hari/Tanggal Pengecekan:</label>
                                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <table class="col-md-12">
                                            <tr>
                                                <th>No</th>
                                                <th>Tindakan</th>
                                                <th>Cek</th>
                                                <th>Keterangan</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Wallpaper backround RS</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="wallpaper_check" name="wallpaper_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="wallpaper_text" name="wallpaper_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Pastikan login sistem operasi ada dua (admin dan limit)</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="login_check" name="login_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="login_text" name="login_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Pastikan password admin dan limit terkontrol</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="password_check" name="password_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="password_text" name="password_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Screen saver jalan</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="saver_check" name="saver_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="saver_text" name="saver_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Aplikasi remote VNC berjalan</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="vnc_check" name="vnc_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="vnc_text" name="vnc_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Bersihkan folder %tmp% komputer</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="folder_check" name="folder_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="folder_text" name="folder_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Bersihkan komputer dari software yang tidak diijinkan</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="software_check" name="software_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="software_text" name="software_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Cek kapasitas hardisk sistem operasi C</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="hardisk_check" name="hardisk_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="hardisk_text" name="hardisk_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Jalankan SIMRS HAMORI</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="simrs_check" name="simrs_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="simrs_text" name="simrs_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>IP address sesuai</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="ip_check" name="ip_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="ip_text" name="ip_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Ping Local dan Internet berjalan/reply</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="ping_check" name="ping_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="ping_text" name="ping_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Printer bisa digunakan</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="printer_check" name="printer_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="printer_text" name="printer_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Catridge terisi tinta</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="tinta_check" name="tinta_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="tinta_text" name="tinta_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Cek nyalanya monitor</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="monitor_check" name="monitor_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="monitor_text" name="monitor_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Cek fungsi UPS</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="ups_check" name="ups_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="ups_text" name="ups_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>Cek fungsi Mouse</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="mouse_check" name="mouse_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="mouse_text" name="mouse_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>Cek fungsi keyboard</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="keyboard_check" name="keyboard_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="keyboard_text" name="keyboard_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>Bersihkan Casing bagian dalam dari debu</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="case_check" name="case_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="case_text" name="case_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>Rapihkan pengkabelan</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="kabel_check" name="kabel_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="kabel_text" name="kabel_text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>Rapikan penempatan</td>
                                                <td>
                                                    <input type="checkbox" class="checkItem" id="penempatan_check" name="penempatan_check">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="penempatan_text" name="penempatan_text">
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- /.card-body -->
                                        <div class="AllCheck">
                                            <input type="checkbox" id="checkAll" class="checkall">
                                            <label for="checkAll">Check All</label>
                                        </div>
                                        <input type="hidden" name="waktu_input" id="waktu_input">
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" style="margin-left: -17px;">Submit</button>
                                            <a href="data-hardware.php" class="btn btn-primary">Tampilkan Data</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section> <!-- /.content -->
        </div> <!-- /.row -->
    </div><!-- /.container-fluid -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../../.plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- Sweat Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <!-- Page specific script -->
    <script src="../../dist/js/script.js"></script>
    <script src="../../dist/js/script-desain.js"></script>
    <script src="../../dist/js/validasi-form2.js"></script>

    <script>
        document.getElementById('checkAll').onclick = function() {
            var checkboxes = document.querySelectorAll('.checkItem');
            for (var checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        }
    </script>
</body>

</html>