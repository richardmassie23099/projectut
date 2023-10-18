<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ewako | Data Asset</title>
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
                        <h1>LAPORAN DATA ASSET</h1>
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
            <th>No Asset</th>
            <th>Class</th>
            <th>Cap Date</th>
            <th>Deskripsi</th>
            <th>Lokasi</th>
            <th>Deskripsi Lokasi</th>
            <th>Acq Value</th>
            <th>Dep Value</th>
            <th>Book Value</th>
            <th>Kondisi</th>
            <th>Utilisasi</th>
            <th>Hilang</th>
            <th>Keterangan</th>
        </tr>

        <?php
            $no = 1;
            foreach ($asset as $ass) : ?>
            <tr>
            <td><?php echo $no++ ?>.</td>
                <td><?php echo $ass->no_asset ?></td>
                <td><?php echo $ass->class ?></td>
                <td><?php echo $ass->cap_date ?></td>
                <td><?php echo $ass->deskripsi ?></td>
                <td><?php echo $ass->lokasi ?></td>
                <td><?php echo $ass->deskripsi_lokasi ?></td>
                <td><?php echo $ass->acq_value ?></td>
                <td><?php echo $ass->dep_value ?></td>
                <td><?php echo $ass->book_value ?></td>
                <td><?php echo $ass->kondisi ?></td>
                <td><?php echo $ass->utilisasi ?></td>
                <td><?php echo $ass->hilang ?></td>
                <td><?php echo $ass->keterangan ?></td>
            </tr>

        <?php endforeach; ?>
    </table> 

    <script type="text/javascript">
        window.print() ;
    </script>

</body>
</html>