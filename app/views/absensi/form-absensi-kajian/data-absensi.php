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
            color: white;
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
        button,
        .print {
            background-color: #189AB4;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            padding: 12px 20px;
        }

        input[type=submit]:hover,
        button:hover,
        .print:hover {
            transition: 0.25s;
            background-color: #05445E;
        }

        a {
            text-decoration: none;
        }

        button {
            margin-top: 20px;
        }

        .tombol {
            margin: 25px auto;
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

        <div class="header text-center mt-2">
            <a href="../index.php">
                <img src="../../img/logo.png" alt="Logo Hamori">
            </a>
        </div>

        <h1 class="text-center">Data Absensi</h1>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <form method="GET" action="data-absensi.php">
                    <label for="tanggal">Filter Tanggal:</label>
                    <input type="date" id="tanggal" name="tanggal" value="<?php echo isset($_GET['tanggal']) ? $_GET['tanggal'] : ''; ?>" required>
                    <button type="submit" name="action" value="kirim">Filter</button>
                    <?php if (isset($_GET['tanggal'])) : ?>
                        <a href="data-absensi-print.php?tanggal=<?php echo $_GET['tanggal']; ?>" class="print">Print</a>
                    <?php endif; ?>
                    <br>
                </form>

                <?php
                include '../../koneksi.php';

                if (isset($_GET['tanggal'])) {
                    $tanggal_filter = $_GET['tanggal'];
                    $where = "WHERE tanggal = '$tanggal_filter'";

                    $limit = 10;
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $start = ($page - 1) * $limit;

                    $sql = "SELECT * FROM data_absensi_kajian $where LIMIT $start, $limit";
                    $result = mysqli_query($koneksi, $sql);

                    $nomor_urut = ($page - 1) * $limit + 1;

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

                        $sql_count = "SELECT COUNT(*) as total FROM data_absensi_kajian $where";
                        $result_count = mysqli_query($koneksi, $sql_count);
                        $row_count = mysqli_fetch_assoc($result_count);
                        $total_pages = ceil($row_count['total'] / $limit);

                        echo "<br><div class='pagination'>";
                        echo "<h5>Page: </h5>";
                        for ($i = 1; $i <= $total_pages; $i++) {
                            if ($i == $page) {
                                echo "<a class='active' href='data-absensi.php?tanggal=$tanggal_filter&page=$i'>$i</a>";
                            } else {
                                echo "<a href='data-absensi.php?tanggal=$tanggal_filter&page=$i'>$i</a>";
                            }
                        }
                        echo "</div>";
                    } else {
                        echo "Belum ada data yang masuk.";
                    }
                } else {
                    echo "Masukkan tanggal terlebih dahulu";
                }

                mysqli_close($koneksi);
                ?>


                <div class="tombol">
                    <a href="form-absensi.php"><button class="btn-back">Kembali</button></a>
                </div>
            </div>
        </div>
</body>

</html>