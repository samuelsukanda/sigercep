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

        table {
            width: 100%;
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
                                    <h3 class="card-title">Data Kesiapan Ambulance</h3>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="card-body">
                                        <?php
                                        include '../koneksi.php';

                                        $id = isset($_GET['id']) ? $_GET['id'] : null;

                                        if ($id) {
                                            $sql = "SELECT * FROM data_kesiapan_ambulance WHERE id = '$id'";
                                            $result = mysqli_query($koneksi, $sql);

                                            if ($row = mysqli_fetch_assoc($result)) {
                                                $tanggal = date('d-m-Y', strtotime($row['tanggal']));
                                                echo "<table>
                                                    <tr>
                                                        <th class='tnomor'>1</th>
                                                        <th class='thead'>Mobil Ambulance :</th>
                                                        <td>" . $row['mobil_ambulance'] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>2</th>
                                                        <th >Tanggal :</th>
                                                        <td>" . $tanggal . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>3</th>
                                                        <th>Perawat :</th>
                                                        <td>" . $row['perawat'] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>4</th>
                                                        <th>Kondisi Mobil :</th>
                                                        <td>" . $row['kondisi_mobil'] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>5</th>
                                                        <th>Kondisi Driver :</th>
                                                        <td>" . $row['kondisi_driver'] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>6</th>
                                                        <th>Oksigen :</th>
                                                        <td>" . $row['oksigen'] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>7</th>
                                                        <th>Regulator Oksigen :</th>
                                                        <td>" . $row['regulator_oksigen'] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>8</th>
                                                        <th>Kebersihan :</th>
                                                        <td>" . $row['kebersihan'] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>9</th>
                                                        <th>Monitor Pasien :</th>
                                                        <td>" . $row['monitor_pasien'] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>10</th>
                                                        <th>AED :</th>
                                                        <td>" . $row['aed'] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>11</th>
                                                        <th>Suction :</th>
                                                        <td>" . $row['suction'] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>12</th>
                                                        <th>Ventilator :</th>
                                                        <td>" . $row['ventilator'] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>13</th>
                                                        <th>Bed Pasien :</th>
                                                        <td>" . $row['bed_pasien'] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>14</th>
                                                        <th>Linen :</th>
                                                        <td>" . $row['linen'] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>15</th>
                                                        <th>Obat-obatan Emergency :</th>
                                                        <td>" . $row['obat'] . "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='tnomor'>16</th>
                                                        <th>Kelistrikan / Inverter :</th>
                                                        <td>" . $row['inverter'] . "</td>
                                                    </tr>
                                                </table>";
                                            } else {
                                                echo "Data tidak ditemukan.";
                                            }
                                        } else {
                                            echo "ID tidak valid.";
                                        }

                                        mysqli_close($koneksi);
                                        ?>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <a href="data-kesiapan-ambulance.php" class="btn btn-primary">Tampilkan Data</a>
                                    </div>
                                </div>
                                <!-- /.card -->
                                </tbody>
                                <!-- /.card-body -->
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
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- Sweat Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <!-- Page specific script -->
    <script src="../../dist/js/script.js"></script>
</body>

</html>