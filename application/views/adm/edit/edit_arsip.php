<div class="content-wrapper">
    <section class="content">
    <br><center>
        <h3><strong>EDIT DATA ARSIP</strong></h3>
    <br> </center>
        <?php foreach ($arsip as $ass)  { ?>
            <form action="<?php echo base_url().'ARSIP/update' ; ?>" method="post">
                
                <div class="form-group">
                    <label>No Dokumen</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $ass->id ?>">
                    <input type="number" name="no_dokumen" class="form-control" value="<?php echo $ass->no_dokumen ?>">
                </div>

                <div class="form-group">
                    <label>Jenis Dokumen</label>
                    <input type="text" name="jenis_dokumen" class="form-control" value="<?php echo $ass->jenis_dokumen ?>"> 
                </div>

                <div class="form-group">
                    <label>Tanggal Dokumen</label>
                    <input type="date" name="tanggal_dokumen" class="form-control" value="<?php echo $ass->tanggal_dokumen ?>">
                </div>

                <div class="form-group">
                    <label>Cabang</label>
                    <input type="text" name="cabang" class="form-control" value="<?php echo $ass->cabang ?>"> 
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <input type="text" name="status" class="form-control" value="<?php echo $ass->status ?>">  
                </div>

                <div class="form-group">
                    <label>Type</label>
                    <input type="text" name="type" class="form-control" value="<?php echo $ass->type ?>">
                </div>

                <div class="form-group">
                    <label>Kepada</label>
                    <input type="text" name="kepada" class="form-control" value="<?php echo $ass->kepada ?>">
                </div>

                <div class="form-group">
                    <label>Keperluan</label>
                    <input type="text" name="keperluan" class="form-control" value="<?php echo $ass->keperluan ?>">
                </div>

                <div class="form-group">
                    <label>Lokasi Arsip</label>
                    <input type="text" name="lokasi_arsip" class="form-control" value="<?php echo $ass->lokasi_arsip ?>">
                </div>
            <br>
            <center>
                <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-sm btn-danger">RESET</button>
                <a href="<?php echo base_url('ARSIP/index') ?>" class="btn btn-sm btn-warning">KEMBALI</i></a></center>
            </form>
        <?php } ?>
    </section><br>
</div>