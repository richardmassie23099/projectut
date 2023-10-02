<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ewako | Monitoring Part</title>

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/UT.png">
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
                        <h2>LAPORAN MONITORING PART WAREHOUSE</h2>
                        <h1>PT. UNITED TRACTORS, Tbk - Cabang Makassar</h1>
                        <h5><i>JL. Urip Sumoharjo No. 268, Karampuang, Kec. Panakkukang, Kota Makassar, Sul - Sel, 90231</i></h5>
                        </center>
                    </td>
                    <td colspan="5"><hr></td>
                </tr>
            </thead>
        </table>
    </center>
    
    <table class="table text-center table-bordered">  
        <tr class="table-secondary">
            <th style="width: 10px" rowspan="2">No.</th>
            <th rowspan="2">Tanggal</th>
            <th rowspan="2">Part Number</th>
            <th rowspan="2">Description</th>
            <th colspan="2">Status</th>
            <th rowspan="2">Status</th>
            <th rowspan="2">Remark</th>
        </tr>
        <tr class="table-secondary">
            <th>Over</th>
            <th>Short</th>
        </tr>

        <?php
            $no = 1;
            foreach ($monitor_part as $rpr) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $rpr->tanggal ?></td>
                <td><?php echo $rpr->part_num ?></td>
                <td><?php echo $rpr->keterangan ?></td>
                <td><?php echo $rpr->over ?></td>
                <td><?php echo $rpr->short ?></td>
                <td><?php echo $rpr->status ?></td>
                <td><?php echo $rpr->remark ?></td>
            </tr>
        <?php endforeach; ?>
    </table> <br><br><br>
    
        <table class="table table-borderless text-center">
            <tr>
                <th> </th>
                <th>Mengetahui</th>
                <th> </th>
            </tr>
        
            <tr>
                <th>Yang Membuat :</th>
                <th> </th>
                <th>Disetujui Oleh :</th>
            </tr>
            
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>

            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>

            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>

            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>

            <tbody>
                <tr>
                    <th>.......................................................</th>
                    <th> </th>
                    <th>.......................................................</th>
                </tr>

                <tr>
                    <th>PST p</th>
                    <th> </th>
                    <th>Administration Dept Head</th>
                </tr>
            </tbody>
        </table>

    <script type="text/javascript">
        window.print() ;
    </script>

</body>
</html>