<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kUTh Apps | Print Laporan KOTAK P3K</title>

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/UT.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.css">

</head>
<body>
    <center>
        <table class="table border-bottom">
            <thead>
                <tr>
                    <td><img src="<?php echo base_url() ?>assets/dist/img/UT.png" alt="" class="brand-image  elevation-0" width="130px" height="130px"></td>
                    <td>
                        <center>
                        <h2>LAPORAN KONDISI KOTAK P3K - KENDARAAN / A2B</h2>
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

        <table class="table table text-center table-striped table-bordered">  
            <tr>
                <th style="width: 10px">No.</th>
                <th>Tanggal</th>
                <th>Penggunaan</th>
                <th>Dimensi (cm)</th>
                <th>Bahan/Obat</th>
                <th>Kondisi</th>
                <th>Jumlah (Qyt)</th>
                <th>Keterangan</th>
            </tr>

            <?php
                $no = 1;
                foreach ($datafilter as $med) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $med->tanggal ?></td>
                    <td><?php echo $med->penggunaan ?></td>
                    <td><?php echo $med->dimensi ?></td>
                    <td><?php echo $med->nama_obat ?></td>
                    <td><?php echo $med->kondisi ?></td>
                    <td><?php echo $med->jumlah ?> <?php echo $med->satuan ?></td>
                    <td><?php echo $med->keterangan ?></td>
                </tr>
            <?php endforeach; ?>
        </table><br><hr>
    
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