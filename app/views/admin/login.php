<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In</title>

    <!-- Icon Shortcut -->
    <link rel="shortcut icon" href="../../dist/img/rs.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        @import url('https://fonts.cdnfonts.com/css/segoe-ui-4?styles=18004');

        @font-face {
            font-family: 'SegoeUIBold';
            src: url('../font/SegoeUIBold.woff');
        }


        @font-face {
            font-family: 'SegoeUI';
            src: url('../font/SegoeUI.woff');
        }


        body {
            background-color: #ffffff;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='1' y2='0'%3E%3Cstop offset='0' stop-color='%230FF'/%3E%3Cstop offset='1' stop-color='%23CF6'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' x1='0' x2='0' y1='0' y2='1' gradientTransform='rotate(38,0.5,0.5)'%3E%3Cstop offset='0' stop-color='%2320A8FF'/%3E%3Cstop offset='1' stop-color='%230EFF26'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg fill='%23FFF' fill-opacity='0' stroke-miterlimit='10'%3E%3Cg stroke='url(%23a)' stroke-width='2'%3E%3Cpath transform='translate(-14.7 0) rotate(-0.8999999999999999 1409 581) scale(0.987892)' d='M1409 581 1450.35 511 1490 581z'/%3E%3Ccircle stroke-width='4' transform='translate(-21 12) rotate(0.6000000000000001 800 450) scale(0.9999909999999999)' cx='500' cy='100' r='40'/%3E%3Cpath transform='translate(1.2000000000000002 -9) rotate(3 401 736) scale(0.9999909999999999)' d='M400.86 735.5h-83.73c0-23.12 18.74-41.87 41.87-41.87S400.86 712.38 400.86 735.5z'/%3E%3C/g%3E%3Cg stroke='url(%23b)' stroke-width='4'%3E%3Cpath transform='translate(72 1.2000000000000002) rotate(-0.30000000000000004 150 345) scale(0.999964)' d='M149.8 345.2 118.4 389.8 149.8 434.4 181.2 389.8z'/%3E%3Crect stroke-width='8' transform='translate(-15 -33)' x='1039' y='709' width='100' height='100'/%3E%3Cpath transform='translate(-38.4 9.6) scale(0.97)' d='M1426.8 132.4 1405.7 168.8 1363.7 168.8 1342.7 132.4 1363.7 96 1405.7 96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }

        .container {
            margin-top: 55px;
        }

        .form-header h3 {
            font-family: 'SegoeUIBold', sans-serif;
            font-size: 38px;
        }

        .form-logo img {
            width: 200px;
        }

        .dot {
            fill: #189AB4;
            font-size: 24px;
            margin-left: 105px;
            margin-bottom: -48px;
        }

        .form-header {
            margin-bottom: 30px;
        }

        .form-header span,
        .form-header a {
            font-family: 'SegoeUIBold', sans-serif;
            font-size: 13px;
            margin-right: 6px;
        }

        .form-header a {
            color: #189AB4;
            text-decoration: none;
        }

        .form-header a:hover {
            transition: 0.25s;
            color: #05445E;
        }

        .form-label,
        .form-check {
            font-family: 'SegoeUIBold', sans-serif;
        }

        .form-control {
            width: 300px;
            height: 45px;
        }

        .form-control,
        .form-check-input {
            border-color: #189AB4;
        }

        .dropdown-toggle {
            font-size: 12px;
            height: fit-content;
        }

        .btn-signup {
            width: 300px;
            height: 45px;
            background-color: #189AB4;
            text-transform: uppercase;
            color: white;
            transition: .5s;
        }

        .btn-signup:hover {
            color: white !important;
            background-color: #05445E !important;
        }

        .bg img {
            box-shadow: 2px 2px 3px #707070;
        }

        .bg img:hover {
            cursor: pointer;
        }

        .pesan-error .warning,
        .pesan-error .error {
            visibility: hidden;
        }

        .pesan-error {
            margin-top: 20px;
        }

        .pesan-error .error {
            color: red;
        }

        @media (max-width: 992px) {
            img {
                display: none;
            }
        }
    </style>
</head>

<body>
    <?php

    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo "<script>
    if (typeof window.history.replaceState == 'function') {
        window.history.replaceState({}, '', 'login.php');
    }
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.error').style.visibility = 'visible';
        document.querySelector('.warning').style.visibility = 'visible';
    });
    </script>";
    }
    ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 justify-content-center d-flex mt-5">
                <form action="proses-login.php" method="POST">

                    <div class="form-header">
                        <svg xmlns="http://www.w3.org/2000/svg" class="dot" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M12 18a6 6 0 100-12 6 6 0 000 12z"></path>
                        </svg>
                        <h3>Log In</h3>
                    </div>

                    <!-- <div class="form-header">
                        <svg xmlns="http://www.w3.org/2000/svg" class="dot" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M12 18a6 6 0 100-12 6 6 0 000 12z"></path>
                        </svg>
                        <h3>Log In</h3>
                        <span>Belum punya akun?</span> <a href="signup.php">Daftar disini</a>
                    </div> -->

                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="username" class="form-control" id="username" maxlength="10" style='text-transform:lowercase' required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>

                    <input type="submit" class="btn btn-signup" value="login">

                    <div class="pesan-error">
                        <img class="warning" src="../../dist/img/warning.png" width="24px">
                        <span class="error">Username atau Password anda salah</span>
                    </div>
                </form>
            </div>

            <div class="bg col-md-6">
                <img src="../../dist/img/hmr.png" alt="background" height="570px">
            </div>
        </div>
    </div>
</body>

</html>