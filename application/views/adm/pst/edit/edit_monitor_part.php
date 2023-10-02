<div class="content-wrapper">
    <section class="content">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12">
        <br><center>
            <h2><strong>Edit Monotoring Part</strong></h2>
        <br><br> </center>
        <?php foreach ($monitor_part as $rpr)  { ?>
            <form action="<?php echo base_url().'monitor_part/update' ; ?>" method="post">
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Due Date</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $rpr->id ?>">
                        <input type="date" name="tanggal" value="<?php echo $rpr->tanggal ?>"  class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Part Number</label>
                    <div class="col-sm-10">
                        <input type="text" name="part_num" value="<?php echo $rpr->part_num ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="keterangan" value="<?php echo $rpr->keterangan ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Over</label>
                    <div class="col-sm-10">
                        <input type="number" name="over" value="<?php echo $rpr->over ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Short</label>
                    <div class="col-sm-10">
                        <input type="number" name="short" value="<?php echo $rpr->short ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <input type="text" name="status" value="<?php echo $rpr->status ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Remark</label>
                    <div class="col-sm-10">
                        <input type="text" name="remark" value="<?php echo $rpr->remark ?>" class="form-control">
                    </div>
                </div>

            <center>
                <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
                <button type="reset" class="btn btn-danger btn-sm">RESET</button>
                <a href="<?php echo base_url('monitor_part/index') ?>" class="btn btn-sm btn-warning">KEMBALI</i></a></center>
            </form>
        <?php } ?>
    </section>
</div>