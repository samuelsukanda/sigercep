<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tampilan Data</title>

    <link rel="shortcut icon" href="../../img/rs.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        @media screen and (min-width: 992px) {
            table {
                width: 100%;
                font-size: 18px;
            }
        }

        @media (max-width: 767px) {
            table {
                width: 100%;
                font-size: 11px;
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

        h1 {
            font-size: 30px;
            color: #000;
            font-family: 'Ubuntu', sans-serif;
            text-align: center;
            margin-top: 20px;
        }

        h3 {
            color: #189AB4;
        }

        h5 {
            color: #000;
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #2F4F4F;
        }

        th,
        td {
            background-color: #fff;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #189AB4;
            color: #000;
        }

        tr:nth-child(even) {
            background-color: #189AB4;
        }

        a.edit {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 8px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 4px;
        }

        a.edit:hover {
            background-color: #3e8e41;
        }

        a.delete {
            margin: 10px;
            position: relative;
            background-color: #f44336;
            border: none;
            color: white;
            padding: 8px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 4px;
        }

        a.delete:hover {
            background-color: #e53935;
        }

        input[type=submit],
        button {
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

        .tombol {
            margin: 25px auto;
        }

        /* Header */
        .header {
            display: flex;
            width: 100%;
        }

        .header>div {
            flex-basis: 33.33%;
            padding: 20px;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            box-shadow: -1px 0 0 black, 1px 0 0 black;
            border-bottom: 1px solid black;
        }

        .imgheader {
            text-align: center;
        }

        .logo {
            max-width: 150px;
            height: auto;
        }

        .daftar h4 {
            margin-top: 10px;
            font-weight: 600;
            text-align: center;
        }

        .col {
            margin-bottom: 5px;
        }

        .text-1,
        .text-2 {
            font-size: 11px;
        }

        .hidden {
            display: none;
        }

        .date {
            margin-top: 15px;
            font-size: 14px;
            font-weight: 600;
            line-height: 10px;
            margin-bottom: 10px;
        }

        /* Pagination */

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .pagination a {
            display: inline-block;
            border-radius: 10px;
            padding: 8px 16px;
            margin: 0 5px;
            background-color: #fff;
            color: #000;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .pagination a.active {
            background-color: #189AB4;
            color: #fff;
        }

        .pagination a:hover:not(.active) {
            background-color: #189AB4;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="header mt-2">
            <div class="imgheader"> <a href="../index.php">
                    <img class="logo" src="../../img/logohmr.png" alt="Logo Hamori">
                </a>
            </div>
            <div class="daftar">
                <h4>DAFTAR HADIR</h4>
            </div>
            <div class="no_rev">
                <div class="col text-1">No. From : <?php echo isset($_GET['no_from']) ? $_GET['no_from'] : ''; ?> DIR.05.04.07.001</div>
                <div class="col text-2">No. Revisi : <?php echo isset($_GET['no_revisi']) ? $_GET['no_revisi'] : ''; ?> 00 <span class="hidden">05.04.07.001</span> </div>
            </div>
        </div>

        <div class="row date">
            <p>Hari/Tanggal: <?php echo isset($_GET['tanggal']) ? date('d-m-Y', strtotime($_GET['tanggal'])) : ''; ?></p>
            <p>Topik : <?php echo isset($_GET['topik']) ? $_GET['topik'] : ''; ?> Kajian</p>
            <p>Waktu : <?php echo isset($_GET['waktu_mulai']) ? $_GET['waktu_mulai'] : ''; ?> - <?php echo isset($_GET['waktu_selesai']) ? $_GET['waktu_selesai'] : ''; ?></p>
        </div>

        <div class="row data_absensi_kajian">
            <div class="col-md-12 mx-auto">
                <?php
                include '../../koneksi.php';

                if (isset($_GET['tanggal'])) {
                    $tanggal = $_GET['tanggal'];
                    $where = "WHERE tanggal = '$tanggal'";

                    $limit = 100;
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $start = ($page - 1) * $limit;

                    $sql = "SELECT * FROM data_absensi_kajian $where LIMIT $start, $limit";
                    $result = mysqli_query($koneksi, $sql);

                    $nomor_urut = 1;

                    if (mysqli_num_rows($result) > 0) {
                        echo "<table>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Unit</th>
                            <th>Tanggal</th>
                            <th>Tanda Tangan</th>
                        </tr>";

                        while ($row = mysqli_fetch_assoc($result)) {
                            $tanggal = date('d-m-Y', strtotime($row['tanggal']));
                            echo "<tr>
                                    <td>" . $nomor_urut++ . "</td>
                                    <td>" . $row['nama'] . "</td>
                                    <td>" . $row['unit'] . "</td>
                                    <td>" . $tanggal . "</td>
                                    <td><img src='" . 'uploads/' . $row['tanda_tangan'] . "' width='150px' height='100px'/></td>
                                    </tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "Belum ada data yang masuk.";
                    }
                } else {
                    echo "Masukan tanggal terlebih dahulu";
                }

                mysqli_close($koneksi);
                ?>

            </div>
        </div>
</body>

</html>