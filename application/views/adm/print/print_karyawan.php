<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ewako | Data Karyawan</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/UT.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
</head>
<body>
    <center>
           <thead>
                <tr>
                    <td><img src="<?php echo base_url() ?>assets/dist/img/UT.png" alt="" class="brand-image  elevation-0" width="150px" height="150px"></td>
                    <td>
                        <center>
                        <h1>LAPORAN DATA KARYAWAN</h1>
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

    <table class="table table-striped text-center table-bordered">  
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
            <th>Status keluarga</th>
            <th>Jumlah anak</th>
            <th>Tanggal mulai bekerja</th>
        </tr>

        <?php
            $no = 1;
            foreach ($karyawan as $ass) : ?>
            <tr>
            <td><?php echo $no++ ?>.</td>
                <td><?php echo $ass->nrp ?></td>
                <td><?php echo $ass->nama_karyawan ?></td>
                <td><?php echo $ass->company ?></td>
                <td><?php echo $ass->lokasi ?></td>
                <td><?php echo $ass->departement ?></td>
                <td><?php echo $ass->posisi ?></td>
                <td><?php echo $ass->tempat_lahir ?></td>
                <td><?php echo $ass->tanggal_lahir ?></td>
                <td><?php echo $ass->status_keluarga ?></td>
                <td><?php echo $ass->jumlah_anak ?></td>
                <td><?php echo $ass->tanggal_mulai_bekerja ?></td>
            </tr>

        <?php endforeach; ?>
    </table> 

    <script type="text/javascript">
        window.print() ;
    </script>

</body>
</html>