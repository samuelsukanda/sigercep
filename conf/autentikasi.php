<?php
session_start();
include('config.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($query) == 1) {
    $_SESSION['username'] = $username;
    header('Location: ../app/index.php');
    $user = mysqli_fetch_array($query);
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['level'] = $user['level'];
} else if ($username == '' || $password == '') {
    header('Location: ../index.php?error=2');
} else {
    header('Location: ../index.php?error=1');
}
