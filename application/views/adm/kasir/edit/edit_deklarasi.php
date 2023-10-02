<div class="content-wrapper">
    <section class="content">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12">

        <?php foreach ($deklarasi as $dkl)  { ?>
            <form action="<?php echo base_url().'deklarasi/update' ; ?>" method="post">
            <section class="section">
                <div class="card">
                    <div class="card-body">
                    <center>
                        <h2><strong>EDIT DEKLARASI KARYAWAN</strong></h2> <br> 
                    </center>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput">Tanggal</label>
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $dkl->id ?>">
                                    <input type="date" name="tanggal" value="<?php echo $dkl->tanggal ?>"  class="form-control" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="helpInputTop">Keperluan</label>
                                    <input type="text" name="keperluan" value="<?php echo $dkl->keperluan ?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="helperText">Amount</label>
                                    <input type="text" name="amount" value="<?php echo $dkl->amount ?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="helpInputTop">Keterangan</label>
                                    <input type="text" name="keterangan" value="<?php echo $dkl->keterangan ?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="helperText">NRP</label>
                                    <input type="text" name="nrp" value="<?php echo $dkl->nrp ?>" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="disabledInput">Tanggal Deklarasi</label>
                                    <input type="text" name="tanggal_deklarasi" value="<?php echo $dkl->tanggal_deklarasi ?>" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label for="disabledInput">Uang Muka</label>
                                    <input type="text" name="uang_muka" value="<?php echo $dkl->uang_muka ?>" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label for="disabledInput">Jumlah Pengeluaran Actual</label>
                                    <input type="text" name="jum_keluar_act" value="<?php echo $dkl->jum_keluar_act ?>" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label for="disabledInput">Kembali ke <?php echo $dkl->kembali_ke ?></label>
                                    <input type="hidden" name="kembali_ke" value="<?php echo $dkl->kembali_ke ?>" class="form-control" >
                                    <input type="text" name="kembalian" value="<?php echo $dkl->kembalian ?>" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label for="disabledInput">Lokasi</label>
                                    <input type="text" name="lokasi" value="<?php echo $dkl->lokasi ?>" class="form-control" >
                                </div> <br>
                            </div>
                            
                            <center>
                                <button type="submit" class="btn btn-primary btn-sm"><b>SIMPAN</b></button>
                                <!-- <button type="reset" class="btn btn-danger btn-sm">RESET</button> -->
                                <a href="<?php echo base_url('deklarasi/index') ?>" class="btn btn-sm btn-secondary"><b>KEMBALI</b></a>
                            </center>
                        </div>
                    </div>
                </div>
            </section>
            </form>
        <?php } ?>
    </section>
</div>