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
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Sweat Alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<?php
include '../koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM data_kesiapan_ambulance WHERE id=$id";
$result = mysqli_query($koneksi, $query);

$data = mysqli_fetch_assoc($result);
?>

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
                                <li class="breadcrumb-item active">Kesiapan Ambulance</li>
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
                                    <h3 class="card-title">Form Edit Kesiapan Ambulance</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form id="form" method="POST" action="proses-edit.php" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="mobil_ambulance">Mobil Ambulance:</label><br>
                                            <input type="radio" id="luxio" name="mobil_ambulance" value="Ambulance Luxio T 9931 TB" <?php if ($data['mobil_ambulance'] == "Ambulance Luxio T 9931 TB") echo "checked"; ?>>
                                            <label for="luxio">Ambulance Luxio T 9931 TB</label><br>
                                            <input type="radio" id="alphard" name="mobil_ambulance" value="Ambulance Alphard T 9905 Z" <?php if ($data['mobil_ambulance'] == "Ambulance Alphard T 9905 Z") echo "checked"; ?>>
                                            <label for="alphard">Ambulance Alphard T 9905 Z</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal">Tanggal:</label>
                                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $data['tanggal']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="perawat">Perawat:</label>
                                            <select class="form-control select2bs4" id="perawat" name="perawat">
                                                <option selected disabled>Pilih Perawat</option>
                                                <?php
                                                $perawat = $data['perawat'];
                                                $options = array(
                                                    "Ecin Lestari Putri, A.Md.Kep",
                                                    "Yusuf Ifnugroho, AMK",
                                                    "Nur Fitriyana Sutisna, S.Kep.,Ners",
                                                    "Siska Roheni, A.Md.Kep",
                                                    "Hilya Aeni, A.Md.Kep",
                                                    "Dea Agustin, A.Md.Kep",
                                                    "Alvin Aprilianto Widjojo, A.Md.Kep",
                                                    "Benny Laksana, A.Md.Kep",
                                                    "Hemavanna Trisrasepti, A.Md.Kep",
                                                    "Dedeh Rina, A.Md.Kep",
                                                    "Miftah Choirul Anam, S.Kep.,Ners",
                                                    "Candra Nugraha, A.Md.Kep"
                                                );
                                                foreach ($options as $option) {
                                                    $selected = ($perawat == $option) ? 'selected' : '';
                                                    echo "<option value=\"$option\" $selected>$option</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="kondisi_mobil">Kondisi Mobil:</label><br>
                                            <input type="radio" id="kondisi_mobil_siap" name="kondisi_mobil" value="Siap" <?php if ($data['kondisi_mobil'] == "Siap") echo "checked"; ?>>
                                            <label for="kondisi_mobil_siap">Siap</label><br>
                                            <input type="radio" id="kondisi_mobil_rusak" name="kondisi_mobil" value="Rusak" <?php if ($data['kondisi_mobil'] == "Rusak") echo "checked"; ?>>
                                            <label for="kondisi_mobil_rusak">Rusak</label><br>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <input type="radio" id="kondisi_mobil_other" name="kondisi_mobil" value="Other" <?php if ($data['kondisi_mobil'] == "Other") echo "checked"; ?> onclick="toggleOtherInput('kondisi_mobil_input')">
                                                    <label for="kondisi_mobil_other">Other</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" id="kondisi_mobil_input" name="kondisi_mobil_input" class="hidden form-control" style="height: 28px; margin-left: -15px;" value="<?php echo $data['kondisi_mobil']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="kondisi_driver">Kondisi Driver:</label><br>
                                            <input type="radio" id="kondisi_driver_siap" name="kondisi_driver" value="Siap" <?php if ($data['kondisi_driver'] == "Siap") echo "checked"; ?>>
                                            <label for="kondisi_driver_siap">Siap</label><br>
                                            <input type="radio" id="kondisi_driver_tidak_siap" name="kondisi_driver" value="Tidak Siap" <?php if ($data['kondisi_driver'] == "Tidak Siap") echo "checked"; ?>>
                                            <label for="kondisi_driver_tidak_siap">Tidak Siap</label><br>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <input type="radio" id="kondisi_driver_other" name="kondisi_driver" value="Other" <?php if ($data['kondisi_driver'] == "Rusak") echo "checked"; ?> onclick="toggleOtherInput('kondisi_driver_input')">
                                                    <label for="kondisi_driver_other">Other</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" id="kondisi_driver_input" name="kondisi_driver_input" class="hidden form-control" style="height: 28px; margin-left: -15px;" value="<?php echo $data['kondisi_driver']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="oksigen">Oksigen:</label><br>
                                            <input type="radio" id="oksigen_ada" name="oksigen" value="Ada" <?php if ($data['oksigen'] == "Ada") echo "checked"; ?>>
                                            <label for="oksigen_ada">Ada</label><br>
                                            <input type="radio" id="oksigen_harus_diisi" name="oksigen" value="Harus Diisi" <?php if ($data['oksigen'] == "Harus Diisi") echo "checked"; ?>>
                                            <label for="oksigen_harus_diisi">Harus diisi</label><br>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <input type="radio" id="oksigen_other" name="oksigen" value="Other" <?php if ($data['oksigen'] == "Other") echo "checked"; ?> onclick="toggleOtherInput('oksigen_input')">
                                                    <label for="oksigen_other">Other</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" id="oksigen_input" name="oksigen_input" class="hidden form-control" style="height: 28px; margin-left: -15px;" value="<?php echo $data['oksigen']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="regulator_oksigen">Regulator Oksigen:</label><br>
                                            <input type="radio" id="regulator_oksigen_bagus" name="regulator_oksigen" value="Bagus" <?php if ($data['regulator_oksigen'] == "Bagus") echo "checked"; ?>>
                                            <label for="regulator_oksigen_bagus">Bagus</label><br>
                                            <input type="radio" id="regulator_oksigen_rusak" name="regulator_oksigen" value="Rusak" <?php if ($data['regulator_oksigen'] == "Rusak") echo "checked"; ?>>
                                            <label for="regulator_oksigen_rusak">Rusak</label><br>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <input type="radio" id="regulator_oksigen_other" name="regulator_oksigen" value="Other" <?php if ($data['regulator_oksigen'] == "Other") echo "checked"; ?> onclick="toggleOtherInput('regulator_oksigen_input')">
                                                    <label for="regulator_oksigen_other">Other</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" id="regulator_oksigen_input" name="regulator_oksigen_input" class="hidden form-control" style="height: 28px; margin-left: -15px;" value="<?php echo $data['regulator_oksigen']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="kebersihan">Kebersihan:</label><br>
                                            <input type="radio" id="kebersihan_bersih" name="kebersihan" value="Bersih" <?php if ($data['kebersihan'] == "Bersih") echo "checked"; ?>>
                                            <label for="kebersihan_bersih">Bersih</label><br>
                                            <input type="radio" id="kebersihan_kotor" name="kebersihan" value="Kotor" <?php if ($data['kebersihan'] == "Kotor") echo "checked"; ?>>
                                            <label for="kebersihan_kotor">Kotor</label><br>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <input type="radio" id="kebersihan_other" name="kebersihan" value="Other" <?php if ($data['kebersihan'] == "Other") echo "checked"; ?> onclick="toggleOtherInput('kebersihan_input')">
                                                    <label for="kebersihan_other">Other</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" id="kebersihan_input" name="kebersihan_input" class="hidden form-control" style="height: 28px; margin-left: -15px;" value="<?php echo $data['kebersihan']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="monitor_pasien">Monitor Pasien:</label><br>
                                            <input type="radio" id="monitor_pasien_siap_pakai" name="monitor_pasien" value="Siap Pakai" <?php if ($data['monitor_pasien'] == "Siap Pakai") echo "checked"; ?>>
                                            <label for="monitor_pasien_siap_pakai">Siap Pakai</label><br>
                                            <input type="radio" id="monitor_pasien_rusak" name="monitor_pasien" value="Rusak" <?php if ($data['monitor_pasien'] == "Rusak") echo "checked"; ?>>
                                            <label for="monitor_pasien_rusak">Rusak</label><br>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <input type="radio" id="monitor_pasien_other" name="monitor_pasien" value="Other" <?php if ($data['monitor_pasien'] == "Other") echo "checked"; ?> onclick="toggleOtherInput('monitor_pasien_input')">
                                                    <label for="monitor_pasien_other">Other</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" id="monitor_pasien_input" name="monitor_pasien_input" class="hidden form-control" style="height: 28px; margin-left: -15px;" value="<?php echo $data['monitor_pasien']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="aed">AED:</label><br>
                                            <span> <i>Meminjam Milik IGD</i> </span><br>
                                            <input type="radio" id="aed_ada" name="aed" value="Ada" <?php if ($data['aed'] == "Ada") echo "checked"; ?>>
                                            <label for="aed_ada" class="mt-2">Ada</label><br>
                                            <input type="radio" id="aed_rusak" name="aed" value="Rusak" <?php if ($data['aed'] == "Rusak") echo "checked"; ?>>
                                            <label for="aed_rusak">Rusak</label><br>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <input type="radio" id="aed_other" name="aed" value="Other" <?php if ($data['aed'] == "Other") echo "checked"; ?> onclick="toggleOtherInput('aed_input')">
                                                    <label for="aed_other">Other</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" id="aed_input" name="aed_input" class="hidden form-control" style="height: 28px; margin-left: -15px;" value="<?php echo $data['aed']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="suction">Suction:</label><br>
                                            <span>Meminjam Milik IGD</span><br>
                                            <input type="radio" id="suction_ada" name="suction" value="Ada" <?php if ($data['suction'] == "Ada") echo "checked"; ?>>
                                            <label for="suction_ada" class="mt-2">Ada</label><br>
                                            <input type="radio" id="suction_rusak" name="suction" value="Rusak" <?php if ($data['suction'] == "Rusak") echo "checked"; ?>>
                                            <label for="suction_rusak">Rusak</label><br>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <input type="radio" id="suction_other" name="suction" value="Other" <?php if ($data['suction'] == "Other") echo "checked"; ?> onclick="toggleOtherInput('suction_input')">
                                                    <label for="suction_other">Other</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" id="suction_input" name="suction_input" class="hidden form-control" style="height: 28px; margin-left: -15px;" value="<?php echo $data['suction']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="ventilator">Ventilator:</label><br>
                                            <span>Meminjam Milik IGD</span><br>
                                            <input type="radio" id="ventilator_ada" name="ventilator" value="Ada" <?php if ($data['ventilator'] == "Ada") echo "checked"; ?>>
                                            <label for="ventilator_ada" class="mt-2">Ada</label><br>
                                            <input type="radio" id="ventilator_rusak" name="ventilator" value="Rusak" <?php if ($data['ventilator'] == "Rusak") echo "checked"; ?>>
                                            <label for="ventilator_rusak">Rusak</label><br>
                                            <input type="radio" id="ventilator_belum_tersedia" name="ventilator" value="Belum Tersedia" <?php if ($data['ventilator'] == "Belum Tersedia") echo "checked"; ?>>
                                            <label for="ventilator_belum_tersedia">Belum Tersedia</label><br>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <input type="radio" id="ventilator_other" name="ventilator" value="Other" <?php if ($data['ventilator'] == "Other") echo "checked"; ?> onclick="toggleOtherInput('ventilator_input')">
                                                    <label for="ventilator_other">Other</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" id="ventilator_input" name="ventilator_input" class="hidden form-control" style="height: 28px; margin-left: -15px;" value="<?php echo $data['ventilator']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="bed_pasien">Bed Pasien:</label><br>
                                            <span>Meminjam Milik IGD</span><br>
                                            <input type="radio" id="bed_pasien_ada" name="bed_pasien" value="Ada" <?php if ($data['bed_pasien'] == "Ada") echo "checked"; ?>>
                                            <label for="bed_pasien_ada" class="mt-2">Ada</label><br>
                                            <input type="radio" id="bed_pasien_tidak_ada" name="bed_pasien" value="Tidak Ada" <?php if ($data['bed_pasien'] == "Tidak Ada") echo "checked"; ?>>
                                            <label for="bed_pasien_tidak_ada">Tidak Ada</label><br>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <input type="radio" id="bed_pasien_other" name="bed_pasien" value="Other" <?php if ($data['bed_pasien'] == "Other") echo "checked"; ?> onclick="toggleOtherInput('bed_pasien_input')">
                                                    <label for="bed_pasien_other">Other</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" id="bed_pasien_input" name="bed_pasien_input" class="hidden form-control" style="height: 28px; margin-left: -15px;" value="<?php echo $data['bed_pasien']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="linen">Linen:</label><br>
                                            <input type="radio" id="linen_tersedia" name="linen" value="Tersedia" <?php if ($data['linen'] == "Tersedia") echo "checked"; ?>>
                                            <label for="linen_tersedia">Tersedia</label><br>
                                            <input type="radio" id="linen_tidak_tersedia" name="linen" value="Tidak Tersedia" <?php if ($data['linen'] == "Tidak Tersedia") echo "checked"; ?>>
                                            <label for="linen_tidak_tersedia">Tidak Tersedia</label><br>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <input type="radio" id="linen_other" name="linen" value="Other" <?php if ($data['linen'] == "Other") echo "checked"; ?> onclick="toggleOtherInput('linen_input')">
                                                    <label for="linen_other">Other</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" id="linen_input" name="linen_input" class="hidden form-control" style="height: 28px; margin-left: -15px;" value="<?php echo $data['linen']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="obat">Obat-obatan Emergency:</label><br>
                                            <input type="radio" id="obat_ada" name="obat" value="Ada" <?php if ($data['obat'] == "Ada") echo "checked"; ?>>
                                            <label for="obat_ada">Ada</label><br>
                                            <input type="radio" id="obat_tidak_ada" name="obat" value="Tidak Ada" <?php if ($data['obat'] == "Tidak Ada") echo "checked"; ?>>
                                            <label for="obat_tidak_ada">Tidak Ada</label><br>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <input type="radio" id="obat_other" name="obat" value="Other" <?php if ($data['obat'] == "Other") echo "checked"; ?> onclick="toggleOtherInput('obat_input')">
                                                    <label for="obat_other">Other</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" id="obat_input" name="obat_input" class="hidden form-control" style="height: 28px; margin-left: -15px;" value="<?php echo $data['obat']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inverter">Kelistrikan / Inverter:</label><br>
                                            <input type="radio" id="inverter_baik" name="inverter" value="Baik" <?php if ($data['inverter'] == "Baik") echo "checked"; ?>>
                                            <label for="inverter_baik">Baik</label><br>
                                            <input type="radio" id="inverter_rusak" name="inverter" value="Rusak" <?php if ($data['inverter'] == "Rusak") echo "checked"; ?>>
                                            <label for="inverter_rusak">Rusak</label><br>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <input type="radio" id="inverter_other" name="inverter" value="Other" <?php if ($data['inverter'] == "Other") echo "checked"; ?> onclick="toggleOtherInput('inverter_input')">
                                                    <label for="inverter_other">Other</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" id="inverter_input" name="inverter_input" class="hidden form-control" style="height: 28px; margin-left: -15px;" value="<?php echo $data['inverter']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- /.card-body -->
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                        <input type="hidden" name="waktu_input" id="waktu_input">
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" style="margin-left: -17px;">Submit</button>
                                            <a href="data-kesiapan-ambulance.php" class="btn btn-primary">Tampilkan Data</a>
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
    <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- Page specific script -->
    <script src="../../dist/js/script.js"></script>
    <script src="../../dist/js/script-ambulance.js"></script>
    <script src="../../dist/js/validasi-ambulance.js"></script>
</body>

</html>