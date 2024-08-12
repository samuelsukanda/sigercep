<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form Absensi - Sukses</title>

    <link rel="shortcut icon" href="../../img/rs.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        @media screen and (min-width: 992px) {
            .container {
                width: 420px;
            }
        }

        @media (max-width: 767px) {
            .container {
                width: 380px;
            }
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('../../img/bg-hamori.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .header img {
            width: 200px;
        }

        .container {
            background-color: #fff;
            margin-top: 25px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
            margin: 20px auto;
            text-align: center;
        }

        h3 {
            color: #189AB4;
        }

        input[type=submit],
        button {
            font-family: 'Poppins', sans-serif;
            background-color: #189AB4;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            padding: 12px 20px;

        }

        input[type=submit]:hover,
        button:hover {
            transition: 0.25s;
            background-color: #05445E;
        }

        button {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="header text-center mt-2">
        <img src="../../img/logo.png" alt="Logo Hamori">
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-12 mx-auto">
                <?php
                include '../../koneksi.php';

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
                    $unit = mysqli_real_escape_string($koneksi, $_POST['unit']);
                    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
                    $tanda_tangan = $_POST['tanda_tangan'];
                    $waktu_input = mysqli_real_escape_string($koneksi, $_POST['waktu_input']);

                    $tanda_tangan = str_replace('data:image/png;base64,', '', $tanda_tangan);
                    $tanda_tangan = str_replace(' ', '+', $tanda_tangan);
                    $tanda_tangan_decoded = base64_decode($tanda_tangan);
                    $nama_file_tanda_tangan = uniqid() . '.png';
                    $target_dir = "uploads/";
                    $target_file = $target_dir . $nama_file_tanda_tangan;
                    file_put_contents($target_file, $tanda_tangan_decoded);

                    $nama_file_tanda_tangan = mysqli_real_escape_string($koneksi, $nama_file_tanda_tangan);
                    
                    $sql = "SELECT COUNT(*) as count FROM data_absensi_kajian WHERE nama='$nama' AND tanggal='$tanggal'";
                    $result = $koneksi->query($sql);
                    $row = $result->fetch_assoc();
                    $count = $row['count'];

                    if ($count == 0) {
                        $sql = "INSERT INTO data_absensi_kajian (nama, unit, tanggal, tanda_tangan, waktu_input) 
                        VALUES ('$nama', '$unit', '$tanggal', '$nama_file_tanda_tangan', '$waktu_input')";
                        if ($koneksi->query($sql) === TRUE) {
                            echo "<h3>Data berhasil dimasukkan</h3>";
                        } else {
                            echo "<h3>Error: </h3>" . $sql . "<br>" . mysqli_error($koneksi);
                        }
                    } else {
                        echo "<h3>Data sudah ada</h3>";
                    }

                    mysqli_close($koneksi);
                }?>

                <button onclick="window.location.href='form-absensi.php'">Kembali ke Form</button>
            </div>
        </div>
    </div>

</body>



</html>