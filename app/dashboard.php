<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.cotent-header -->

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $total_ipsrs; ?></h3>
                        <p>Komplain IPSRS</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <a href="views/komplain/ipsrs/data-komplain-ipsrs.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $total_makanan; ?></h3>
                        <p>Komplain Makanan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pizza"></i>
                    </div>
                    <a href="views/komplain/makanan/data-komplain-makanan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $total_outsourcing; ?></h3>
                        <p>Komplain Outsourcing Vendor</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-hammer"></i>
                    </div>
                    <a href="views/komplain/outsourcing-vendor/data-outsourcing-vendor.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php echo $total_desain; ?></h3>
                        <p>Desain Grafis</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <a href="views/desain-grafis/data-desain-grafis.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo $total_ruangan; ?></h3>
                        <p>Reservasi Ruangan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-home"></i>
                    </div>
                    <a href="views/reservasi/ruangan/data-reservasi-ruangan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo $total_kendaraan; ?></h3>
                        <p>Reservasi Kendaraan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <a href="views/reservasi/kendaraan/data-reservasi-kendaraan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-olive">
                    <div class="inner">
                        <h3><?php echo $total_kecelakaan; ?></h3>
                        <p>Kecelakaan Kerja</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-radiation"></i>
                    </div>
                    <a href="views/kecelakaan-kerja/data-kecelakaan-kerja.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-orange">
                    <div class="inner">
                        <h3><?php echo $total_ambulance; ?></h3>
                        <p>Kesiapan Ambulance</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-notes-medical"></i>
                    </div>
                    <a href="views/kesiapan-ambulance/data-kesiapan-ambulance.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3><?php echo $total_mutu; ?></h3>
                        <p>Indikator Mutu</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <a href="views/komite-mutu/mutu/data-mutu.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3><?php echo $total_spo; ?></h3>
                        <p>Bank SPO</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <a href="views/komite-mutu/bank-spo/bank-spo.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3><?php echo $total_risiko; ?></h3>
                        <p>Manajemen Risiko</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <a href="views/komite-mutu/manajemen-risiko/data-manajemen-risiko.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <?php if (($_SESSION['level'] == 'SUPER ADMIN' && $_SESSION['nama'] == 'IT')) { ?>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-maroon">
                        <div class="inner">
                            <h3><?php echo $total_toner; ?></h3>
                            <p>Toner</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-print"></i>
                        </div>
                        <a href="views/toner/data-toner.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h3><?php echo $total_visitasi; ?></h3>
                            <p>Visitasi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <a href="views/visitasi/data-visitasi.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-pink">
                        <div class="inner">
                            <h3><?php echo $total_peminjaman; ?></h3>
                            <p>Peminjaman</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-hand-holding"></i>
                        </div>
                        <a href="views/peminjaman/data-peminjaman.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?php echo $total_hardware; ?></h3>
                            <p>Hardware</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <a href="views/form-ceklis/data-hardware.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            <?php } ?>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.main-content -->