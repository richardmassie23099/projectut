<div class="content-wrapper">
    <section class="content">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12">
        <br><center>
            <h2><strong>Edit Reporting AP</strong></h2>
        <br><br> </center>
        <?php foreach ($report as $rpr)  { ?>
            <form action="<?php echo base_url().'report/update' ; ?>" method="post">
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Due Date</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $rpr->id ?>">
                        <input type="date" name="tanggal" value="<?php echo $rpr->tanggal ?>"  class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Vendor</label>
                    <div class="col-sm-10">
                        <input type="text" name="name_vendor" value="<?php echo $rpr->name_vendor ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Account Vendor</label>
                    <div class="col-sm-10">
                        <input type="text" name="account_vendor" value="<?php echo $rpr->account_vendor ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <input type="text" name="status" value="<?php echo $rpr->status ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Payment</label>
                    <div class="col-sm-10">
                        <input type="text" name="payment" value="<?php echo $rpr->payment ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No Invoice</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_invoice" value="<?php echo $rpr->no_invoice ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Date Invoice</label>
                    <div class="col-sm-10">
                        <input type="date" name="date_invoice" value="<?php echo $rpr->date_invoice ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Aging FP</label>
                    <div class="col-sm-10">
                        <input type="text" name="aging_fp" value="<?php echo $rpr->aging_fp ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Amount</label>
                    <div class="col-sm-10">
                        <input type="text" name="amount" value="<?php echo $rpr->amount ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Text</label>
                    <div class="col-sm-10">
                        <input type="text" name="text" value="<?php echo $rpr->text ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Receipt ADM</label>
                    <div class="col-sm-10">
                        <input type="date" name="receipt_adm" value="<?php echo $rpr->receipt_adm ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Receipt User</label>
                    <div class="col-sm-10">
                        <input type="date" name="receipt_user" value="<?php echo $rpr->receipt_user ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Back to ADM</label>
                    <div class="col-sm-10">
                        <input type="date" name="back_adm" value="<?php echo $rpr->back_adm ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Aging</label>
                    <div class="col-sm-10">
                        <input type="text" name="aging" value="<?php echo $rpr->aging ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">L/T</label>
                    <div class="col-sm-10">
                        <input type="text" name="lt" value="<?php echo $rpr->lt ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Post Date</label>
                    <div class="col-sm-10">
                        <input type="date" name="post_date" value="<?php echo $rpr->post_date ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">L/T</label>
                    <div class="col-sm-10">
                        <input type="text" name="lt_2" value="<?php echo $rpr->lt_2 ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Doc Number</label>
                    <div class="col-sm-10">
                        <input type="text" name="doc_num" value="<?php echo $rpr->doc_num ?>" class="form-control">
                    </div>
                </div>
                <br>
                
            <center>
                <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
                <button type="reset" class="btn btn-danger btn-sm">RESET</button>
                <a href="<?php echo base_url('report/index') ?>" class="btn btn-sm btn-warning">KEMBALI</i></a></center>
            </form>
        <?php } ?>
    </section><br>
</div>