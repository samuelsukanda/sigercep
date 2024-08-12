<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Si Gercep</title>

    <link rel="shortcut icon" href="../img/rs.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        @media (max-width: 767px) {
            form {
                width: 95%;
            }
        }

        @media screen and (min-width: 992px) {
            form {
                width: 80%;
            }
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('../img/bg-hamori.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .header img {
            width: 200px;
        }

        .btn {
            width: 250px;
            font-family: 'Poppins', sans-serif;
            background-color: #189AB4;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            padding: 12px 20px;
            margin-top: 20px;
        }

        .btn:hover {
            transition: 0.25s;
            color: #fff;
            background-color: #05445E;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="header text-center mt-2">
            <a href="./index.php">
                <img src="../img/logo.png" alt="Logo Hamori">
            </a>
        </div>

        <div class="row justify-content-center ">
            <div class="col-md-4 text-center">
                <button class="btn btn-block mb-3" onclick="window.location.href='/form/absensi/form-absensi-mod/form-absensi.php'">Absensi MOD</button>
                <button class="btn btn-block mb-3" onclick="window.location.href='/form/absensi/form-absensi-kajian/form-absensi.php'">Absensi Kajian</button>
            </div>
        </div>
    </div>
</body>

</html>