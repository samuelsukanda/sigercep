<?php
$sql_ruangan = "SELECT COUNT(*) as total_ruangan FROM data_reservasi_ruangan";
$result_ruangan = $koneksi->query($sql_ruangan);
$total_ruangan = 0;
if ($result_ruangan->num_rows > 0) {
    $row = $result_ruangan->fetch_assoc();
    $total_ruangan = $row['total_ruangan'];
}

$sql_kendaraan = "SELECT COUNT(*) as total_kendaraan FROM data_reservasi_kendaraan";
$result_kendaraan = $koneksi->query($sql_kendaraan);
$total_kendaraan = 0;
if ($result_kendaraan->num_rows > 0) {
    $row = $result_kendaraan->fetch_assoc();
    $total_kendaraan = $row['total_kendaraan'];
}

$sql_ipsrs = "SELECT COUNT(*) as total_ipsrs FROM data_komplain_ipsrs";
$result_ipsrs = $koneksi->query($sql_ipsrs);
$total_ipsrs = 0;
if ($result_ipsrs->num_rows > 0) {
    $row = $result_ipsrs->fetch_assoc();
    $total_ipsrs = $row['total_ipsrs'];
}

$sql_makanan = "SELECT COUNT(*) as total_makanan FROM data_komplain_makanan";
$result_makanan = $koneksi->query($sql_makanan);
$total_makanan = 0;
if ($result_makanan->num_rows > 0) {
    $row = $result_makanan->fetch_assoc();
    $total_makanan = $row['total_makanan'];
}

$sql_outsourcing = "SELECT COUNT(*) as total_outsourcing FROM data_komplain_outsourcing_vendor";
$result_outsourcing = $koneksi->query($sql_outsourcing);
$total_outsourcing = 0;
if ($result_outsourcing->num_rows > 0) {
    $row = $result_outsourcing->fetch_assoc();
    $total_outsourcing = $row['total_outsourcing'];
}

$sql_desain = "SELECT COUNT(*) as total_desain FROM data_desain_grafis";
$result_desain = $koneksi->query($sql_desain);
$total_desain = 0;
if ($result_desain->num_rows > 0) {
    $row = $result_desain->fetch_assoc();
    $total_desain = $row['total_desain'];
}

$sql_toner = "SELECT COUNT(*) as total_toner FROM data_toner";
$result_toner = $koneksi->query($sql_toner);
$total_toner = 0;
if ($result_toner->num_rows > 0) {
    $row = $result_toner->fetch_assoc();
    $total_toner = $row['total_toner'];
}

$sql_ambulance = "SELECT COUNT(*) as total_ambulance FROM data_kesiapan_ambulance";
$result_ambulance = $koneksi->query($sql_ambulance);
$total_ambulance = 0;
if ($result_ambulance->num_rows > 0) {
    $row = $result_ambulance->fetch_assoc();
    $total_ambulance = $row['total_ambulance'];
}

$sql_spo = "SELECT COUNT(*) as total_spo FROM data_bank_spo";
$result_spo = $koneksi->query($sql_spo);
$total_spo = 0;
if ($result_spo->num_rows > 0) {
    $row = $result_spo->fetch_assoc();
    $total_spo = $row['total_spo'];
}

$sql_kecelakaan = "SELECT COUNT(*) as total_kecelakaan FROM data_kecelakaan_kerja";
$result_kecelakaan = $koneksi->query($sql_kecelakaan);
$total_kecelakaan = 0;
if ($result_kecelakaan->num_rows > 0) {
    $row = $result_kecelakaan->fetch_assoc();
    $total_kecelakaan = $row['total_kecelakaan'];
}

$sql_mutu = "SELECT COUNT(*) as total_mutu FROM data_pelaporan_indikator_mutu";
$result_mutu = $koneksi->query($sql_mutu);
$total_mutu = 0;
if ($result_mutu->num_rows > 0) {
    $row = $result_mutu->fetch_assoc();
    $total_mutu = $row['total_mutu'];
}

$sql_risiko = "SELECT COUNT(*) as total_risiko FROM data_manajemen_risiko";
$result_risiko = $koneksi->query($sql_risiko);
$total_risiko = 0;
if ($result_risiko->num_rows > 0) {
    $row = $result_risiko->fetch_assoc();
    $total_risiko = $row['total_risiko'];
}

$sql_visitasi = "SELECT COUNT(*) as total_visitasi FROM data_visitasi";
$result_visitasi = $koneksi->query($sql_visitasi);
$total_visitasi = 0;
if ($result_visitasi->num_rows > 0) {
    $row = $result_visitasi->fetch_assoc();
    $total_visitasi = $row['total_visitasi'];
}

$sql_peminjaman = "SELECT COUNT(*) as total_peminjaman FROM data_peminjaman";
$result_peminjaman = $koneksi->query($sql_peminjaman);
$total_peminjaman = 0;
if ($result_peminjaman->num_rows > 0) {
    $row = $result_peminjaman->fetch_assoc();
    $total_peminjaman = $row['total_peminjaman'];
}

$sql_hardware = "SELECT COUNT(*) as total_hardware FROM data_hardware";
$result_hardware = $koneksi->query($sql_hardware);
$total_hardware = 0;
if ($result_hardware->num_rows > 0) {
    $row = $result_hardware->fetch_assoc();
    $total_hardware = $row['total_hardware'];
}

