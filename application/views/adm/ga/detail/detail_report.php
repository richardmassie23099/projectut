<div class="page-content">
    <section class="row">
        <br><br><center>
            <h2><strong>Detail Reporting AP</strong></h2>
        <br><br> 

        <table class=" col-11 table">  
            <tr>
                <th>Due Date</th>
                <td class="text-center"> <h4><span class="btn btn-primary btn-sm"><?php echo $detail_report->tanggal ?></span></h4></td>
            </tr>

            <tr>
                <th>Nama Vendor</th>
                    <td class="text-center"><?php echo $detail_report->name_vendor ?></td>
            </tr>

            <tr>
                <th>Account Vendor</th>
                    <td class="text-center"><?php echo $detail_report->account_vendor ?></td>
            </tr>

            <tr>
                <th>Status</th>
                    <td class="text-center"><?php echo $detail_report->status ?></td>
            </tr>

            <tr>
                <th>Payment</th>
                    <td class="text-center"><?php echo $detail_report->payment ?></td>
            </tr>

            <tr>
                <th>No Invoice</th>
                    <td class="text-center"><?php echo $detail_report->no_invoice ?></td>
            </tr>

            <tr>
                <th>Date Invoice</th>
                    <td class="text-center"><?php echo $detail_report->date_invoice ?></td>
            </tr>

            <tr>
                <th>Aging FP</th>
                    <td class="text-center"><?php echo $detail_report->aging_fp ?></td>
            </tr>

            <tr>
                <th>Amount</th>
                    <td class="text-center"><?php echo $detail_report->amount ?></td>
            </tr>

            <tr>
                <th>Text</th>
                    <td class="text-center"><?php echo $detail_report->text ?></td>
            </tr>

            <tr>
                <th>Receipt ADM</th>
                    <td class="text-center"><?php echo $detail_report->receipt_adm ?></td>
            </tr>

            <tr>
                <th>Receipt User</th>
                    <td class="text-center"><?php echo $detail_report->receipt_user ?></td>
            </tr>

            <tr>
                <th>Back to ADM</th>
                    <td class="text-center"><?php echo $detail_report->back_adm ?></td>
            </tr>

            <tr>
                <th>Aging</th>
                    <td class="text-center"><?php echo $detail_report->aging ?></td>
            </tr>

            <tr>
                <th>L/T</th>
                    <td class="text-center"><?php echo $detail_report->lt ?></td>
            </tr>

            <tr>
                <th>Post Date</th>
                    <td class="text-center"><?php echo $detail_report->post_date ?></td>
            </tr>

            <tr>
                <th>L/T</th>
                    <td class="text-center"><?php echo $detail_report->lt_2 ?></td>
            </tr>

            <tr>
                <th>Doc Number</th>
                    <td class="text-center"><?php echo $detail_report->doc_num ?></td>
            </tr>

        </table><br>
        </center>
            <center>
                <a href="<?php echo base_url('report/index') ?>" class="btn btn-primary btn-sm">Kembali</i></a>
            </center>
            <br><br>

    </section>
</div>