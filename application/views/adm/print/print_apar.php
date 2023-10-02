<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ewako | Laporan Kondisi APAR</title>

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
                        <h2>LAPORAN KONDISI ALAT PEMADAM API RINGAN (APAR)</h2>
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
            <th colspan="9" >Komponen Pengecekan</th>
            <th rowspan="2" >Keterangan</th>
        </tr>
        <tr>
            <th>Kondisi Visual</th>
            <th>Arah Jarum</th>
            <th>Kondisi Segel</th>
            <th>Kondisi Isi</th>
            <th>Kondisi Hose</th>
            <th>Kondisi Handle</th>
            <th>Lock Pin</th>
            <th>Penempatan</th>
            <th>Rambu</th>
        </tr>

        <?php
            $no = 1;
            foreach ($apar as $apr) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $apr->tanggal ?></td>
                <td><?php echo $apr->no_apar ?></td>
                <td><?php echo $apr->lokasi ?></td>
                <td><?php echo $apr->kondisi_visual ?></td>
                <td><?php echo $apr->arah_jarum ?></td>
                <td><?php echo $apr->kondisi_segel ?></td>
                <td><?php echo $apr->kondisi_isi ?></td>
                <td><?php echo $apr->kondisi_hose ?></td>
                <td><?php echo $apr->kondisi_handle ?></td>
                <td><?php echo $apr->lock_pin ?></td>
                <td><?php echo $apr->kondisi_apar ?></td>
                <td><?php echo $apr->rambu_apar ?></td>
                <td><?php echo $apr->keterangan ?></td>
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