<?php

$host = "localhost";
$user = "root";
$database = "sigercep_db";
$port = 3366;

$koneksi = new mysqli($host, $user, '', $database, $port);

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}