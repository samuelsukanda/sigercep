<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form Absensi Kajian</title>

    <link rel="shortcut icon" href="../../img/rs.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

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
            background-image: url('../../img/bg-hamori.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .header img {
            width: 200px;
        }

        form {
            font-size: 18px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
            margin: 20px auto;
        }

        h1 {
            font-size: 30px;
            color: #000;
            font-family: 'Ubuntu', sans-serif;
            text-align: center;
            margin-top: 20px;
        }

        input[type=text],
        input[type=time],
        input[type=date],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        select {
            height: 50px;
        }

        canvas {
            border: 2px solid lightgrey;
            border-radius: 10px;
            margin-top: 8px;
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
            margin-top: 20px;
        }

        input[type=submit]:hover,
        button:hover {
            transition: 0.25s;
            background-color: #05445E;
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

        <h1 class="text-center">Form Absensi Kajian</h1>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form method="POST" action="proses-absensi.php" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                    </div>

                    <div class="form-group">
                        <label for="unit">Unit:</label>
                        <select class="form-select" id="unit" name="unit" required>
                            <option selected disabled>Pilih Unit</option>
                            <option value="Admisi dan Billing">Admisi dan Billing</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Casemix">Casemix</option>
                            <option value="CSSD">CSSD</option>
                            <option value="Direktur RS">Direktur RS</option>
                            <option value="Dokter">Dokter</option>
                            <option value="Farmasi">Farmasi</option>
                            <option value="Fisioterapi">Fisioterapi</option>
                            <option value="Gudang">Gudang</option>
                            <option value="Gizi">Gizi</option>
                            <option value="HMA">HMA</option>
                            <option value="ICU">ICU</option>
                            <option value="ISS">ISS</option>
                            <option value="IT">IT</option>
                            <option value="Kesehatan Lingkungan">Kesehatan Lingkungan</option>
                            <option value="Kanit">Kanit</option>
                            <option value="Keuangan">Keuangan</option>
                            <option value="Komite Mutu">Komite Mutu</option>
                            <option value="Laboratorium">Laboratorium</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Manager">Manager</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="NICU dan PICU">NICU dan PICU</option>
                            <option value="NS Poli">NS Poli</option>
                            <option value="OK">OK</option>
                            <option value="Pengadaan">Pengadaan</option>
                            <option value="Pengendali Lapangan">Pengendali Lapangan</option>
                            <option value="Perawat">Perawat</option>
                            <option value="Rawat Inap">Rawat Inap</option>
                            <option value="Radiologi">Radiologi</option>
                            <option value="Rekam Medis">Rekam Medis</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="Security">Security</option>
                            <option value="SDM">SDM</option>
                            <option value="SPV">SPV</option>
                            <option value="UGD">UGD</option>
                            <option value="VK">VK</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal:</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" min="<?php echo date('Y-m-d'); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="tanda_tangan">Tanda Tangan:</label>
                        <div class="card-body">

                            <canvas type="text" id="signature-pad" class="signature-pad" name="tanda_tangan" width="310" height="200" required></canvas>
                            <div>
                                <button type="button" class="btn btn-dark" id="undo">
                                    <span class="fas fa-undo"></span>
                                    Undo
                                </button>

                                <button type="button" class="btn btn-danger" id="clear">
                                    <span class="fas fa-eraser"></span>
                                    Clear
                                </button>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="tanda_tangan" id="tanda_tangan" value="">
                    <input type="hidden" name="waktu_input" id="waktu_input">
                    <input type="submit" id="submit" value="Kirim">
                    <button onclick="window.location.href='data-absensi.php'">Tampilkan Data</button>
                    <button onclick="window.location.href='../index.php'">Menu Utama</button>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
<script>
    document.getElementById('submit').addEventListener('click', function(event) {
        var signature = signaturePad.toDataURL();
        if (signaturePad.isEmpty()) {
            Swal.fire({
                icon: 'error',
                title: 'Tanda Tangan Belum Diisi!',
                text: 'Silakan isi tanda tangan terlebih dahulu.'
            });
            event.preventDefault();
            return;
        }
        document.getElementById('tanda_tangan').value = signature;
        var nama = document.getElementById('nama').value;
        var tanggal = document.getElementById('tanggal').value;
        var waktu_input = getFormInputTime();

        $.ajax({
            url: "proses-absensi.php",
            data: {
                nama: nama,
                tanggal: tanggal,
                tanda_tangan: signature,
                waktu_input: waktu_input
            },
        });
    });

    function getFormInputTime() {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();
        var formattedTime = hours + ':' + minutes + ':' + seconds;
        document.getElementById('waktu_input').value = formattedTime;
        return formattedTime;
    }

    var canvas = document.getElementById('signature-pad');

    var signaturePad = new SignaturePad(canvas, {
        backgroundColor: 'rgb(255, 255, 255)'
    });

    document.getElementById('clear').addEventListener('click', function() {
        signaturePad.clear();
    });

    document.getElementById('undo').addEventListener('click', function() {
        var data = signaturePad.toData();
        if (data) {
            data.pop();
            signaturePad.fromData(data);
        }
    });
</script>

</html>