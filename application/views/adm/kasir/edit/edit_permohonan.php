<div class="content-wrapper">
    <section class="content">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12">
        <br><center>
            <h2><strong>Edit Permohonan Fasilitas Komunikasi</strong></h2>
        <br><br> </center>
        <?php foreach ($permohonan as $pmh)  { ?>
            <form action="<?php echo base_url().'permohonan/update' ; ?>" method="post">
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $pmh->id ?>">
                        <input type="date" name="tanggal" value="<?php echo $pmh->tanggal ?>"  class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" value="<?php echo $pmh->nama ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="nrp" value="<?php echo $pmh->nrp ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" name="jabatan" value="<?php echo $pmh->jabatan ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Divisi / Dept</label>
                    <div class="col-sm-10">
                        <input type="text" name="dept" value="<?php echo $pmh->dept ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                        <input type="text" name="lokasi" value="<?php echo $pmh->lokasi ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Besar Pengeluaran</label>
                    <div class="col-sm-10">
                        <input type="text" name="pengeluaran" value="<?php echo $pmh->pengeluaran ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Besar Penggantian</label>
                    <div class="col-sm-10">
                        <input type="text" name="pengganti" value="<?php echo $pmh->pengganti ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Pemakaian</label>
                    <div class="col-sm-10">
                        <input type="text" name="pemakaian" value="<?php echo $pmh->pemakaian ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lokasi Claim</label>
                    <div class="col-sm-10">
                        <input type="text" name="lokasi_claim" value="<?php echo $pmh->lokasi_claim ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Claim</label>
                    <div class="col-sm-10">
                        <input type="date" name="tanggal_claim" value="<?php echo $pmh->tanggal_claim ?>" class="form-control">
                    </div>
                </div>
                <br>
                
            <center>
                <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
                <button type="reset" class="btn btn-danger btn-sm">RESET</button>
                <a href="<?php echo base_url('permohonan/index') ?>" class="btn btn-sm btn-warning">KEMBALI</i></a></center>
            </form>
        <?php } ?>
    </section><br>
</div>