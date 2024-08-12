<?php
session_start();
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = $koneksi->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $username;
            ?>
            <script>
                window.location.href ='../../index.php';
            </script>
        <?php
            exit();
        }
    }

    header("Location: login.php?error=1");
    exit();
}

session_unset();
session_destroy();
?>
