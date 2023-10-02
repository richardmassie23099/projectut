<div class="content-wrapper">
    <section class="content">
    <br><center>
        <h3><strong>EDIT DATA PENGGUNAAN BBM</strong></h3>
    <br> </center>
        <?php foreach ($bbm as $pgw)  { ?>
            <form action="<?php echo base_url().'bbm/update' ; ?>" method="post">
                
                <div class="form-group">
                    <label>Tanggal Pengisian</label>
                    <input type="date" name="tanggal" value="<?php echo $pgw->tanggal ?>"  class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $pgw->id ?>">
                    <input type="text" name="nama" class="form-control" value="<?php echo $pgw->nama ?>">
                </div>

                <div class="form-group">
                    <label>Nomor Polisi Kendaraan</label>
                    <input type="text" name="no_pol" class="form-control" value="<?php echo $pgw->no_pol ?>">
                </div>

                <div class="form-group">
                    <label>Jenis Bahan Bakar</label>
                    <!-- <input type="text" name="jenis_bbm" class="form-control" value="<?php echo $pgw->jenis_bbm ?>"> -->
                    <select name="jenis_bbm" class="form-control">
                        <option value="10000"<?php echo ($pgw->jenis_bbm == "10000")? "selected=\"on\"" : "" ?>>Pertalite</option>
                        <option value="13050"<?php echo ($pgw->jenis_bbm == "13050")? "selected=\"on\"" : "" ?>>Pertamax</option>
                        <option value="16500"<?php echo ($pgw->jenis_bbm == "16500")? "selected=\"on\"" : "" ?>>Dexlite</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Jumlah Pengisian BBM ( Liter )</label>
                    <input type="text" name="jumlah_liter" class="form-control" value="<?php echo $pgw->jumlah_liter ?>">
                </div>

                <div class="form-group">
                    <input type="hidden" name="harga_bbm" value="<?php echo $pgw->jenis_bbm * $pgw->jumlah_liter ?>" class="form-control">
                </div>

            <br>
            <center>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-danger">RESET</button>
                <a href="<?php echo base_url('bbm/index') ?>" class="btn btn-warning">KEMBALI</i></a></center>
            </form>
        <?php } ?>
    </section><br>
</div>