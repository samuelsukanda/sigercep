<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        header("Location: signup.php?error=1");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $insertQuery = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";

    if ($koneksi->query($insertQuery) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $insertQuery . "<br>" . $koneksi->error;
    }
}

$koneksi->close();
