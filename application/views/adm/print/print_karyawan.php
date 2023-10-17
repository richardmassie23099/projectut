<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ewako | Data karyawan</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>karyawans/dist/img/UT.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url() ?>karyawans/dist/css/adminlte.min.css">
</head>
<body>
    <center>
        <table clkry="table">
            <thead>
                <tr>
                    <td><img src="<?php echo base_url() ?>karyawans/dist/img/UT.png" alt="" clkry="brand-image  elevation-0" width="150px" height="150px"></td>
                    <td>
                        <center>
                        <h1>LAPORAN DATA KARYAWAN</h1>
                        <h2>PT. UNITED TRACTORS, Tbk - Cabang Makkryar</h2>
                        <h5><i>JL. Urip Sumoharjo No. 268, Karampuang, Kec. Panakkukang, Kota Makassar, Sul - Sel, 90231</i></h5>
                        </center>
                    </td>
                    <td colspan="5"><hr></td>
                </tr>
            </thead>
        </table>
    </center>
    <br>

    <table clkry="table table-striped text-center">  
        <tr>
            <th style="width: 8px">No.</th>
            <th>NRP</th>
            <th>Nama Karyawan</th>
            <th>Company</th>
            <th>Lokasi</th>
            <th>Departement</th>
            <th>Posisi</th>
            <th>Tempat lahir</th>
            <th>Tanggal lahir</th>
            <th>Status Keluarga</th>
            <th>jumlah anak</th>
            <th>Tanggal mulai bekerja</th>
        </tr>

        <?php
            $no = 1;
            foreach ($karyawan as $kry) : ?>
            <tr>
            <td><?php echo $no++ ?>.</td>
                <td><?php echo $kry->nrp ?></td>
                <td><?php echo $kry->nama_karyawan ?></td>
                <td><?php echo $kry->company ?></td>
                <td><?php echo $kry->lokasi ?></td>
                <td><?php echo $kry->departement ?></td>
                <td><?php echo $kry->posisi ?></td>
                <td><?php echo $kry->tempat_lahir ?></td>
                <td><?php echo $kry->tanggal_lahir ?></td>
                <td><?php echo $kry->status_keluarga ?></td>
                <td><?php echo $kry->jumlah_anak ?></td>
                <td><?php echo $kry->tanggal_mulai_bekerja ?></td>
            </tr>

        <?php endforeach; ?>
    </table> 

    <script type="text/javascript">
        window.print() ;
    </script>

</body>
</html>