<?php
$menu = [
    'komplain' => true,
    'reservasi' => true,
    'desain_grafis' => true,
    'k3rs' => true,
    'komite_mutu' => true,
    'kesiapan_ambulance' => true,
    'toner' => true,
    'visitasi' => true,
    'peminjaman' => true,
    'hardware' => true,
    'upload' => true
];

if ($_SESSION['level'] == 'SUPER ADMIN') {
} else if ($_SESSION['level'] == 'ADMIN') {
    $menu['toner'] = false;
    $menu['visitasi'] = false;
    $menu['peminjaman'] = false;
    $menu['hardware'] = false;
    $menu['upload'] = false;
} else if ($_SESSION['level'] == 'USER') {
    $menu['toner'] = false;
    $menu['visitasi'] = false;
    $menu['peminjaman'] = false;
    $menu['hardware'] = false;
    $menu['upload'] = false;
}

if ($_SESSION['level'] == 'ADMIN' && $_SESSION['nama'] == 'MUTU') {
    $menu['upload'] = true;
}