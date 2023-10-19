<div class="content-wrapper">
    <section class="content">
    <br><center>
        <h3><strong>EDIT DATA KARYAWAN</strong></h3>
    <br> </center>
        <?php foreach ($karyawan as $ass)  { ?>
            <form action="<?php echo base_url().'karyawan/update' ; ?>" method="post">
                
                <div class="form-group">
                    <label>NRP</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $ass->id ?>">
                    <input type="number" name="nrp" class="form-control" value="<?php echo $ass->nrp ?>">
                </div>

                <div class="form-group">
                    <label>Nama karyawan</label>
                    <input type="text" name="nama_karyawan" class="form-control" value="<?php echo $ass->nama_karyawan ?>"  
                </div>

                <div class="form-group">
                    <label>Company</label>
                    <input type="text" name="company" class="form-control" value="<?php echo $ass->company ?>">
                </div>

                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" value="<?php echo $ass->lokasi ?>"  
                </div>

                <div class="form-group">
                    <label>Departement</label>
                    <input type="text" name="departement" class="form-control" value="<?php echo $ass->departement ?>"  
                </div>

                <div class="form-group">
                    <label>Posisi </label>
                    <input type="text" name="posisi" class="form-control" value="<?php echo $ass->posisi ?>">
                </div>

                <div class="form-group">
                    <label>Tempat lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $ass->tempat_lahir ?>">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $ass->tanggal_lahir ?>">
                </div>

                <div class="form-group">
                    <label>Status Keluarga</label>
                    <input type="text" name="status_keluarga" class="form-control" value="<?php echo $ass->status_keluarga ?>">
                </div>

                <div class="form-group">
                    <label>Jumlah anak</label>
                    <input type="number" name="jumlah_anak" class="form-control" value="<?php echo $ass->jumlah_anak ?>">
                </div>

                <div class="form-group">
                    <label>Tanggal Mulai Bekerja</label>
                    <input type="date" name="tanggal_mulai_bekerja" class="form-control" value="<?php echo $ass->tanggal_mulai_bekerja ?>">
                </div>
            <br>
            <center>
                <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-sm btn-danger">RESET</button>
                <a href="<?php echo base_url('karyawan/index') ?>" class="btn btn-sm btn-warning">KEMBALI</i></a></center>
            </form>
        <?php } ?>
    </section><br>
</div>