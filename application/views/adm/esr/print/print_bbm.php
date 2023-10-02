<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ewako | Data Penggunaan BBM</title>
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
                        <h1>LAPORAN PENGGUNAAN BAHAN BAKAR MINYAK</h1>
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
            <th>No.</th>
            <th>Tanggal Pengisian</th>
            <th>Nama Karyawan</th>
            <th>Nomor Polisi Kendaraan</th>
            <th>Jenis BBM</th>
            <th>Jumlah Isi (Liter)</th>
            <th>Total Bayar BBM</th>
        </tr>

        <?php
            $no = 1;
            foreach ($bbm as $pgw) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pgw->tanggal ?></td>
                <td><?php echo $pgw->nama ?></td>
                <td><?php echo $pgw->no_pol ?></td>
                <td>
                    <?php
                        if ($pgw->jenis_bbm == "10000") {
                            echo "<h5><span class='btn btn-sm btn-secondary'>Pertalite</span></h5>";
                        }elseif ($pgw->jenis_bbm == "13050") {
                            echo "<h5><span class='btn btn-sm btn-primary'>Pertamax</span></h5>";
                        }else{
                            echo "<h5><span class='btn btn-sm btn-success'>Dexlite</span></h5>";
                        }
                    ?>
                </td>
                <td><?php echo $pgw->jumlah_liter ?> Liter</td>
                <td>Rp. <?php echo $pgw->harga_bbm ?> ,-</td>
            </tr>

        <?php endforeach; ?>
        
        <tbody class="table table-dark">
            <tr></tr>
            <tr>
                <th scope="row"></th>
                    <td> </td>
                    <td>Total Pengisian BBM</td>
                    <td> </td>
                    <td> </td>
                    <td><?php echo $sum_jumlah->jumlah ; ?> Liter </td>
                    <td>Rp. <?php echo $sum_harga->harga ; ?> ,-  </td>
            </tr>
        </tbody>
    </table> 

    <script type="text/javascript">
        window.print() ;
    </script>

</body>
</html>