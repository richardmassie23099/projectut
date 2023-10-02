<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ewako | Permohonan Fasilitas Komunikasi</title>

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
                        <h2>LAPORAN GENERAL AFFAIR - permohonanING AP</h2>
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
            <th style="width: 10px">No.</th>
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
        </tr>

        <?php
            $no = 1;
            foreach ($permohonan as $pmh) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pmh->name_vendor ?></td>
                <td><?php echo $pmh->account_vendor ?></td>
                <td><?php echo $pmh->no_invoice ?></td>
                <td><?php echo $pmh->date_invoice ?></td>
                <td><?php echo $pmh->aging_fp ?></td>
                <td><?php echo $pmh->amount ?></td>
                <td><?php echo $pmh->text ?></td>
                <td><?php echo $pmh->receipt_adm ?></td>
                <td><?php echo $pmh->receipt_user ?></td>
                <td><?php echo $pmh->back_adm ?></td>
                <td><?php echo $pmh->aging ?></td>
                <td><?php echo $pmh->lt ?></td>
                <td><?php echo $pmh->post_date ?></td>
                <td><?php echo $pmh->lt_2 ?></td>
                <td><?php echo $pmh->doc_num ?></td>
                <td><?php echo $pmh->tanggal ?></td>
                <td><?php echo $pmh->status ?></td>
                <td><?php echo $pmh->payment ?></td>
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