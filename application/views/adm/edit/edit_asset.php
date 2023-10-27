<div class="content-wrapper">
    <section class="content">
    <br><center>
        <h3><strong>EDIT DATA asset PKL</strong></h3>
    <br> </center>
        <?php foreach ($asset as $ass)  { ?>
            <form action="<?php echo base_url().'asset/update' ; ?>" method="post">
                
                <div class="form-group">
                    <label>No Asset</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $ass->id ?>">
                    <input type="number" name="no_asset" class="form-control" value="<?php echo $ass->no_asset ?>">
                </div>

                <div class="form-group">
                    <label>Class</label>
                    <input type="text" name="class" value="<?php echo $ass->class ?>"  class="form-control">
                </div>

                <div class="form-group">
                    <label>Cap Date</label>
                    <input type="date" name="cap_date" class="form-control" value="<?php echo $ass->cap_date ?>">
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" value="<?php echo $ass->deskripsi ?>"  class="form-control">
                </div>

                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" name="lokasi" value="<?php echo $ass->lokasi ?>"  class="form-control">
                </div>

                <div class="form-group">
                    <label>Deskrispsi Lokasi ( HP )</label>
                    <input type="text" name="deskripsi_lokasi" class="form-control" value="<?php echo $ass->deskripsi_lokasi ?>">
                </div>

                <div class="form-group">
                    <label>Acq Value</label>
                    <input type="number" name="acq_value" class="form-control" value="<?php echo $ass->acq_value ?>">
                </div>

                <div class="form-group">
                    <label>Dep Value</label>
                    <input type="number" name="dep_value" class="form-control" value="<?php echo $ass->dep_value ?>">
                </div>

                <div class="form-group">
                    <label>Book Value</label>
                    <input type="text" name="book_value" class="form-control" value="<?php echo $ass->book_value ?>">
                </div>

                <div class="form-group">
                    <label>Kondisi</label>
                    <input type="text" name="kondisi" class="form-control" value="<?php echo $ass->kondisi ?>">
                </div>

                <div class="form-group">
                    <label>Utilisasi</label>
                    <input type="text" name="utilisasi" class="form-control" value="<?php echo $ass->utilisasi ?>">
                </div>

                <div class="form-group">
                    <label>Hilang</label>
                    <input type="text" name="hilang" class="form-control" value="<?php echo $ass->hilang ?>">
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" value="<?php echo $ass->keterangan ?>">
                </div>

                <div class="form-group">
                    <label>Apload foto</label>
                    <input type="file" name="apload_foto" class="form-control" value="<?php echo $ass->apload_foto ?>">
                </div>
            <br>
            <center>
                <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-sm btn-danger">RESET</button>
                <a href="<?php echo base_url('asset/index') ?>" class="btn btn-sm btn-warning">KEMBALI</i></a></center>
            </form>
        <?php } ?>
    </section><br>
</div>