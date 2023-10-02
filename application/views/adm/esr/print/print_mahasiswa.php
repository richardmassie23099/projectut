<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ewako | Data Magang / PKL</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/UT.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
</head>
<body>
    <center>
        <table class="table">
            <thead>
                <tr>
                    <td><img src="<?php echo base_url() ?>assets/dist/img/UT.png" alt="" class="brand-image  elevation-0" width="150px" height="150px"></td>
                    <td>
                        <center>
                        <h1>LAPORAN DATA MAHASISWA PKL</h1>
                        <h2>PT. UNITED TRACTORS, Tbk - Cabang Makassar</h2>
                        <h5><i>JL. Urip Sumoharjo No. 268, Karampuang, Kec. Panakkukang, Kota Makassar, Sul - Sel, 90231</i></h5>
                        </center>
                    </td>
                    <td colspan="5"><hr></td>
                </tr>
            </thead>
        </table>
    </center>
    <br>

    <table class="table table-striped text-center">  
        <tr>
            <th style="width: 8px">No.</th>
            <th>Nama Mahasiswa</th>
            <th style="width: 200px">Asal Kampus</th>
            <th style="width: 150px">Jurusan</th>
            <th style="width: 12px">Tanggal Masuk</th>
            <th style="width: 12px">Tanggal Keluar</th>
            <th style="width: 30px">Nomor Telp (HP)</th>
            <th style="width: 200px">Alamat</th>
            <th style="width: 8px">Email Mahasiswa</th>
        </tr>

        <?php
            $no = 1;
            foreach ($mahasiswa as $mhs) : ?>
            <tr>
            <td><?php echo $no++ ?>.</td>
                <td><?php echo $mhs->nama_mhs ?></td>
                <td><?php echo $mhs->asal_kampus ?></td>
                <td><?php echo $mhs->jurusan ?></td>
                <td><?php echo $mhs->masuk_pkl ?></td>
                <td><?php echo $mhs->keluar_pkl ?></td>
                <td><?php echo $mhs->no_telp ?></td>
                <td><?php echo $mhs->alamat ?></td>
                <td><?php echo $mhs->email ?></td>
            </tr>

        <?php endforeach; ?>
    </table> 

    <script type="text/javascript">
        window.print() ;
    </script>

</body>
</html>