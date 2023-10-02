<div class="content-wrapper">
    <section class="content">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12">
        <br><center>
            <h2><strong>Edit Kondisi HYDRANT</strong></h2>
        <br><br> </center>
        <?php foreach ($hydrant as $hyd)  { ?>
            <form action="<?php echo base_url().'hydrant/update' ; ?>" method="post">
                
            <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $hyd->id ?>">
                        <input type="date" name="tanggal" value="<?php echo $hyd->tanggal ?>"  class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                        <input type="number" name="no_hydrant" value="<?php echo $hyd->no_hydrant ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                        <input type="text" name="lokasi" value="<?php echo $hyd->lokasi ?>" class="form-control">
                    </div>
                </div>

                <!-- <div class="form-group row">
                    <label class="col-sm-2 col-form-label">LOKASI HYDRANT</label>
                    <div class="col-sm-10">
                        <select name="lokasi" class="form-control">
                            <option value="LOKASI - 01"<?php echo ($hyd->lokasi == "LOKASI - 01")? "selected=\"on\"" : "" ?>>LOKASI - 01</option>
                            <option value="LOKASI - 02"<?php echo ($hyd->lokasi == "LOKASI - 02")? "selected=\"on\"" : "" ?>>LOKASI - 02</option>
                            <option value="LOKASI - 03"<?php echo ($hyd->lokasi == "LOKASI - 03")? "selected=\"on\"" : "" ?>>LOKASI - 03</option>
                            <option value="LOKASI - 04"<?php echo ($hyd->lokasi == "LOKASI - 04")? "selected=\"on\"" : "" ?>>LOKASI - 04</option>
                            <option value="LOKASI - 05"<?php echo ($hyd->lokasi == "LOKASI - 05")? "selected=\"on\"" : "" ?>>LOKASI - 05</option>
                            <option value="LOKASI - 06"<?php echo ($hyd->lokasi == "LOKASI - 06")? "selected=\"on\"" : "" ?>>LOKASI - 06</option>
                            <option value="LOKASI - 07"<?php echo ($hyd->lokasi == "LOKASI - 07")? "selected=\"on\"" : "" ?>>LOKASI - 07</option>
                        </select>
                    </div>
                </div> -->

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kondisi Hose</label>
                    <div class="col-sm-10">
                        <select name="kondisi_hose" class="form-control">
                            <option value="Baik"<?php echo ($hyd->kondisi_hose == "Baik")? "selected=\"on\"" : "" ?>>Baik</option>
                            <option value="Rusak"<?php echo ($hyd->kondisi_hose == "Rusak")? "selected=\"on\"" : "" ?>>Rusak</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kondisi Nozzle</label>
                    <div class="col-sm-10">
                        <select name="kondisi_nozzle" class="form-control">
                            <option value="Baik"<?php echo ($hyd->kondisi_nozzle == "Baik")? "selected=\"on\"" : "" ?>>Baik</option>
                            <option value="Rusak"<?php echo ($hyd->kondisi_nozzle == "Rusak")? "selected=\"on\"" : "" ?>>Rusak</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Stand Hydrant</label>
                    <div class="col-sm-10">
                        <select name="stand_hydrant" class="form-control">
                            <option value="Baik"<?php echo ($hyd->stand_hydrant == "Baik")? "selected=\"on\"" : "" ?>>Baik</option>
                            <option value="Rusak"<?php echo ($hyd->stand_hydrant == "Rusak")? "selected=\"on\"" : "" ?>>Rusak</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lock Pin</label>
                    <div class="col-sm-10">
                        <select name="lock_pin" class="form-control">
                            <option value="Baik"<?php echo ($hyd->lock_pin == "Baik")? "selected=\"on\"" : "" ?>>Baik</option>
                            <option value="Rusak"<?php echo ($hyd->lock_pin == "Rusak")? "selected=\"on\"" : "" ?>>Rusak</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kebocoran</label>
                    <div class="col-sm-10">
                        <select name="kebocoran" class="form-control">
                            <option value="Baik"<?php echo ($hyd->kebocoran == "Baik")? "selected=\"on\"" : "" ?>>Baik</option>
                            <option value="Bocor"<?php echo ($hyd->kebocoran == "Bocor")? "selected=\"on\"" : "" ?>>Bocor</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" name="keterangan" value="<?php echo $hyd->keterangan ?>" class="form-control">
                    </div>
                </div> <br>
                
            <center>
                <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
                <button type="reset" class="btn btn-danger btn-sm">RESET</button>
                <a href="<?php echo base_url('hydrant/index') ?>" class="btn btn-sm btn-warning">KEMBALI</i></a></center>
            </form>
        <?php } ?>
    </section><br>
</div>