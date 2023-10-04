<div class="content-wrapper">
    <section class="content">
    <br><center>
        <h3><strong>EDIT DATA MAHASISWA PKL</strong></h3>
    <br> </center>
        <?php foreach ($karyawan as $kry)  { ?>
            <form action="<?php echo base_url().'karyawan/update' ; ?>" method="post">
                
                <div class="form-group">
                    <label>Nama Mahasiswa PKL</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $kry->id ?>">
                    <input type="text" name="nama_mhs" class="form-control" value="<?php echo $kry->nama_mhs ?>">
                </div>

                <div class="form-group">
                    <label>Asal Kampus Mahasiswa PKL</label>
                    <input type="text" name="asal_kampus" value="<?php echo $kry->asal_kampus ?>"  class="form-control">
                </div>

                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="<?php echo $kry->jurusan ?>">
                </div>

                <div class="form-group">
                    <label>Tanggal Masuk PKL</label>
                    <input type="date" name="masuk_pkl" value="<?php echo $kry->masuk_pkl ?>"  class="form-control">
                </div>

                <div class="form-group">
                    <label>Tanggal Keluar PKL</label>
                    <input type="date" name="keluar_pkl" value="<?php echo $kry->keluar_pkl ?>"  class="form-control">
                </div>

                <div class="form-group">
                    <label>Nomor Telephone ( HP )</label>
                    <input type="text" name="no_telp" class="form-control" value="<?php echo $kry->no_telp ?>">
                </div>

                <div class="form-group">
                    <label>Alamat Mahasiswa PKL</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $kry->alamat ?>">
                </div>

                <div class="form-group">
                    <label>E-mail Mahasiswa PKL</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $kry->email ?>">
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