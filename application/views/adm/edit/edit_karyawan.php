<div class="content-wrapper">
    <section class="content">
    <br><center>
        <h3><strong>EDIT DATA KARYAWAN</strong></h3>
    <br> </center>
        <?php foreach ($mahasiswa as $mhs)  { ?>
            <form action="<?php echo base_url().'mahasiswa/update' ; ?>" method="post">
                
                <div class="form-group">
                    <label>NRP</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
                    <input type="text" name="NRP" class="form-control" value="<?php echo $mhs->NRP ?>">
                </div>

                <div class="form-group">
                    <label>Nama karyawan</label>
                    <input type="text" name="nama_karyawan" value="<?php echo $mhs->nama_karyawan ?>"  class="form-control">
                </div>

                <div class="form-group">
                    <label>Company</label>
                    <input type="text" name="company" class="form-control" value="<?php echo $mhs->company ?>">
                </div>

                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="date" name="lokasi" value="<?php echo $mhs->lokasi ?>"  class="form-control">
                </div>

                <div class="form-group">
                    <label>Departement</label>
                    <input type="date" name="departement" value="<?php echo $mhs->departement ?>"  class="form-control">
                </div>

                <div class="form-group">
                    <label>Posisi </label>
                    <input type="text" name="posisi" class="form-control" value="<?php echo $mhs->posisi ?>">
                </div>

                <div class="form-group">
                    <label>Tempat lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $mhs->tempat_lahir ?>">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" name="tanggal_lahir" class="form-control" value="<?php echo $mhs->tanggal_lahir ?>">
                </div>

                <div class="form-group">
                    <label>Status Keluarga</label>
                    <input type="text" name="status_keluarga" class="form-control" value="<?php echo $mhs->status_keluarga ?>">
                </div>

                <div class="form-group">
                    <label>Jumlah anak</label>
                    <input type="text" name="jumlah_anak" class="form-control" value="<?php echo $mhs->jumlah_anak ?>">
                </div>

                <div class="form-group">
                    <label>Tanggal Mulai Bekerja</label>
                    <input type="text" name="tanggal_mulai_bekerja" class="form-control" value="<?php echo $mhs->tanggal_mulai_bekerja ?>">
                </div>
            <br>
            <center>
                <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-sm btn-danger">RESET</button>
                <a href="<?php echo base_url('mahasiswa/index') ?>" class="btn btn-sm btn-warning">KEMBALI</i></a></center>
            </form>
        <?php } ?>
    </section><br>
</div>