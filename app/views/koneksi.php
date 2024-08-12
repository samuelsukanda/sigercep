<?php

$host = "localhost";
$user = "root";
$database = "sigercep_db";

$koneksi = new mysqli($host, $user, '', $database);

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}