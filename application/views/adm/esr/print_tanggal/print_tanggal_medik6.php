<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ewako | Print Laporan KOTAK P3K</title>

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/UT.png">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">

</head>
<body>
    <center>
        <table class="table border-bottom">
            <thead>
                <tr>
                    <td><img src="<?php echo base_url() ?>assets/dist/img/UT.png" alt="" class="brand-image  elevation-0" width="130px" height="130px"></td>
                    <td>
                        <center>
                        <h2>LAPORAN KONDISI KOTAK P3K - GEDUNG</h2>
                        <h1>PT. UNITED TRACTORS, Tbk - Cabang Makassar</h1>
                        <h5><i>JL. Urip Sumoharjo No. 268, Karampuang, Kec. Panakkukang, Kota Makassar, Sul - Sel, 90231</i></h5>
                        </center>
                    </td>
                    <td></td>
                    <td colspan="5"><hr></td>
                </tr>
            </thead>
        </table>
    </center>
        <table class="table">
            <thead>
                    </th>
                </tr>
            </thead>
        </table>

    <div class="container">
        <br>
            <h5 align="right">Laporan <b><?php echo $subtitle?></b></h5>
        <br>
    </div>    

    <table class="table text-center table-striped table-bordered">  
        <tr>
            <th rowspan="2" style="width: 10px">No.</th>
            <th rowspan="2">Tanggal</th>
            <th rowspan="2">Penggunaan</th>
            <th rowspan="2">Bahan/Obat</th>
            <th colspan="3">Jumlah (Qyt)</th>
            <th rowspan="2">Kondisi</th>
            <th rowspan="2">Keterangan</th>
        </tr>
        <tr>
            <th>&le; 25 Org</th>
            <th>&le; 50 Org</th>
            <th>&le; 100 Org</th>
        </tr>

            <?php
                $no = 1;
                foreach ($datafilter as $med) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $med->tanggal ?></td>
                    <td><?php echo $med->penggunaan ?></td>
                    <td><?php echo $med->nama_obat ?></td>
                    <td><?php echo $med->jumlah ?> <?php echo $med->satuan ?></td>
                    <td><?php echo $med->jumlah2 ?> <?php echo $med->satuan ?></td>
                    <td><?php echo $med->jumlah3 ?> <?php echo $med->satuan ?></td>
                    <td><?php echo $med->kondisi ?></td>
                    <td><?php echo $med->keterangan ?></td>
                </tr>
            <?php endforeach; ?>
        </table><br><hr><br>
    
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