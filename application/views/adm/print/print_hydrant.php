<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kUTh Apps | Print Laporan Kondisi HYDRANT</title>

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
                        <h2>LAPORAN KONDISI HYDRANT/h2>
                        <h1>PT. UNITED TRACTORS, Tbk - Cabang Makassar</h1>
                        <h5><i>JL. Urip Sumoharjo No. 268, Karampuang, Kec. Panakkukang, Kota Makassar, Sul - Sel, 90231</i></h5>
                        </center>
                    </td>
                    <td colspan="5"><hr></td>
                </tr>
            </thead>
        </table>
    </center> <br>
    
    <table class="table text-center table-bordered">  
        <tr>
            <th rowspan="2" style="width: 10px">No.</th>
            <th rowspan="2" >Tanggal</th>
            <th rowspan="2" >Kode</th>
            <th rowspan="2" >Lokasi</th>
            <th colspan="5" >Komponen Pengecekan</th>
            <th rowspan="2" >Keterangan</th>
        </tr>
        <tr>
            <th>Kondisi Hose</th>
            <th>Kondisi Nozzle</th>
            <th>Stand</th>
            <th>Lock Pin</th>
            <th>Kebocoran</th>
        </tr>

        <?php
            $no = 1;
            foreach ($hydrant as $hyd) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $hyd->tanggal ?></td>
                <td><?php echo $hyd->no_hydrant ?></td>
                <td><?php echo $hyd->lokasi ?></td>
                <td><?php echo $hyd->kondisi_hose ?></td>
                <td><?php echo $hyd->kondisi_nozzle ?></td>
                <td><?php echo $hyd->stand_hydrant ?></td>
                <td><?php echo $hyd->lock_pin ?></td>
                <td><?php echo $hyd->kebocoran ?></td>
                <td><?php echo $hyd->keterangan ?></td>
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
                    <th>E S R O</th>
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