<div class="content-wrapper">
    <section class="content">
    <br><center>
        <h3><strong>EDIT DATA KARYAWAN</strong></h3>
    <br> </center>
        <?php foreach ($karyawan as $kry) : ?>
            <form action="<?php echo base_url().'karyawan/update' ; ?>" method="post">
                
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $kry->id ?>">
                </div>

                <div class="form-group">
                    <label>NRP</label>
                    <input type="number" name="nrp" class="form-control" value="<?php echo $kry->nrp ?>">
                </div>

                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input type="text" name="nama_kry" class="form-control" value="<?php echo $kry->nama_kry ?>">
                </div>

                <div class="form-group">
                    <label>Company</label>
                    <select class="form-select" name="company" id="company" value="<?php echo $kry->company ?>" aria-label="Default select example">
                        <option disabled>Company Karyawan</option>
                        <option value="UT">UT</option>
                        <option value="GSI">GSI</option>
                        <option value="HMU">HMU</option>
                        <option value="NAJ">NAJ</option>
                        <option value="MBUT">MBUT</option>
                        <option value="SIGAP">SIGAP</option>
                        <option value="KAMAJU">KAMAJU</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Department</label>
                    <select class="form-select" name="departement" id="departement" value="<?php echo $kry->departement ?>" aria-label="Default select example">
                        <option disabled>Departemnt Karyawan</option>
                        <option value="ADM">ADM</option>
                        <option value="SVC">SVC</option>
                        <option value="PRT">PRT</option>
                        <option value="SOD">SOD-TSO</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Posisi</label>
                    <input type="text" name="posisi" value="<?php echo $kry->posisi ?>"  class="form-control">
                </div>

                <div class="form-group">
                    <label>Lokasi</label>
                    <select class="form-select" name="lokasi" id="lokasi" value="<?php echo $kry->lokasi ?>" aria-label="Default select example">
                        <option disabled>Lokasi Penempatan</option>
                        <option value="Makassar">Makassar</option>
                        <option value="Kendari">Kendari</option>
                        <option value="Pomalaa">Pomalaa</option>
                        <option value="Langgikima">Langgikima</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $kry->tempat_lahir ?>">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $kry->tgl_lahir ?>">
                </div>

                <div class="form-group">
                    <label>Status Keluarga</label>
                    <select class="form-select" name="status" id="status"aria-label="Default select example">
                        <option disabled>Open this select menu</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum menikah</option>
                    </select>
                </div>
            <br>
            <center>
                <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-sm btn-danger">RESET</button>
                <a href="<?php echo base_url('karyawan/index') ?>" class="btn btn-sm btn-warning">KEMBALI</i></a></center>
            </form>
        <?php endforeach; ?>
    </section><br>
</div>