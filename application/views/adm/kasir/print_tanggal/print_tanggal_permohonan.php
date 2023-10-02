<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ewako | Reporting AP</title>

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
                        <h2>LAPORAN GENERAL AFFAIR - REPORTING AP</h2>
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

        <table class="table table text-center table-bordered">  
            <th>No</th>
            <th>Nama Vendor</th>
            <th>Account Vendor</th>
            <th>No Invoice</th>
            <th>Date Invoice</th>
            <th>Aging FP</th>
            <th>Amount</th>
            <th>Text</th>
            <th>Receipt ADM</th>
            <th>Receipt User</th>
            <th>Back to ADM</th>
            <th>Aging</th>
            <th>L/T</th>
            <th>Post Date</th>
            <th>L/T</th>
            <th>Doc Num</th>
            <th>Due Date</th>
            <th>Status</th>
            <th>Payment</th>

            <?php
                $no = 1;
                foreach ($datafilter as $rpr) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $rpr->name_vendor ?></td>
                    <td><?php echo $rpr->account_vendor ?></td>
                    <td><?php echo $rpr->no_invoice ?></td>
                    <td><?php echo $rpr->date_invoice ?></td>
                    <td><?php echo $rpr->aging_fp ?></td>
                    <td><?php echo $rpr->amount ?></td>
                    <td><?php echo $rpr->text ?></td>
                    <td><?php echo $rpr->receipt_adm ?></td>
                    <td><?php echo $rpr->receipt_user ?></td>
                    <td><?php echo $rpr->back_adm ?></td>
                    <td><?php echo $rpr->aging ?></td>
                    <td><?php echo $rpr->lt ?></td>
                    <td><?php echo $rpr->post_date ?></td>
                    <td><?php echo $rpr->lt_2 ?></td>
                    <td><?php echo $rpr->doc_num ?></td>
                    <td><?php echo $rpr->tanggal ?></td>
                    <td><?php echo $rpr->status ?></td>
                    <td><?php echo $rpr->payment ?></td>
                </tr>
            <?php endforeach; ?>
        </table><br><br><br>
    
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
                    <th>General Affair</th>
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