<div class="content-wrapper">
    <section class="content">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12">
        <br><center>
            <h2><strong>Edit Kondisi APAR</strong></h2>
        <br><br> </center>
        <?php foreach ($apar as $apr)  { ?>
            <form action="<?php echo base_url().'apar/update' ; ?>" method="post">
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $apr->id ?>">
                        <input type="date" name="tanggal" value="<?php echo $apr->tanggal ?>"  class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                        <input type="number" name="no_apar" value="<?php echo $apr->no_apar ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lokasi / Posisi</label>
                    <div class="col-sm-10">
                        <select name="lokasi" class="form-control">
                            <option value="Gedung UT School"<?php echo ($apr->lokasi == "Gedung UT School")? "selected=\"on\"" : "" ?>>Gedung UT School</option>
                            <option value="Gedung TTA"<?php echo ($apr->lokasi == "Gedung TTA")? "selected=\"on\"" : "" ?>>Gedung TTA</option>
                            <option value="Workshop"<?php echo ($apr->lokasi == "Workshop")? "selected=\"on\"" : "" ?>>Workshop</option>
                            <option value="Warehouse"<?php echo ($apr->lokasi == "Warehouse")? "selected=\"on\"" : "" ?>>Warehouse</option>
                            <option value="Office"<?php echo ($apr->lokasi == "Office")? "selected=\"on\"" : "" ?>>Office</option>
                            <option value="Pos Security"<?php echo ($apr->lokasi == "Pos Security")? "selected=\"on\"" : "" ?>>Pos Security</option>
                            <option value="Parkiran Motor"<?php echo ($apr->lokasi == "Parkiran Motor")? "selected=\"on\"" : "" ?>>Parkiran Motor</option>
                            <option value="Area Genset"<?php echo ($apr->lokasi == "Area Genset")? "selected=\"on\"" : "" ?>>Area Genset</option>
                            <option value="Gudang Bahan B3"<?php echo ($apr->lokasi == "Gudang Bahan B3")? "selected=\"on\"" : "" ?>>Gudang Bahan B3</option>
                            <option value="Ruang Mesin Pompa"<?php echo ($apr->lokasi == "Ruang Mesin Pompa")? "selected=\"on\"" : "" ?>>Ruang Mesin Pompa</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kondisi Visual</label>
                    <div class="col-sm-10">
                        <select name="kondisi_visual" class="form-control">
                            <option value="Baik"<?php echo ($apr->kondisi_visual == "Baik")? "selected=\"on\"" : "" ?>>Baik</option>
                            <option value="Rusak"<?php echo ($apr->kondisi_visual == "Rusak")? "selected=\"on\"" : "" ?>>Rusak</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kondisi Arah Jarum</label>
                    <div class="col-sm-10">
                        <select name="arah_jarum" class="form-control">
                            <option value="Posisi HIJAU"<?php echo ($apr->arah_jarum == "Posisi HIJAU")? "selected=\"on\"" : "" ?>>Posisi HIJAU</option>
                            <option value="Posisi TIDAK HIJAU"<?php echo ($apr->arah_jarum == "Posisi TIDAK HIJAU")? "selected=\"on\"" : "" ?>>Posisi TIDAK HIJAU</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kondisi Segel</label>
                    <div class="col-sm-10">
                        <select name="kondisi_segel" class="form-control">
                            <option value="Hijau"<?php echo ($apr->kondisi_segel == "Baik")? "selected=\"on\"" : "" ?>>Baik</option>
                            <option value="Rusak"<?php echo ($apr->kondisi_segel == "Rusak")? "selected=\"on\"" : "" ?>>Rusak</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kondisi Isi</label>
                    <div class="col-sm-10">
                        <select name="kondisi_isi" class="form-control">
                            <option value="Baik"<?php echo ($apr->kondisi_isi == "Baik")? "selected=\"on\"" : "" ?>>Baik</option>
                            <option value="Rusak"<?php echo ($apr->kondisi_isi == "Rusak")? "selected=\"on\"" : "" ?>>Rusak</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kondisi Hose</label>
                    <div class="col-sm-10">
                        <select name="kondisi_hose" class="form-control">
                            <option value="Baik"<?php echo ($apr->kondisi_hose == "Baik")? "selected=\"on\"" : "" ?>>Baik</option>
                            <option value="Rusak"<?php echo ($apr->kondisi_hose == "Rusak")? "selected=\"on\"" : "" ?>>Rusak</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kondisi Handle</label>
                    <div class="col-sm-10">
                        <select name="kondisi_handle" class="form-control">
                            <option value="Baik"<?php echo ($apr->kondisi_handle == "Baik")? "selected=\"on\"" : "" ?>>Baik</option>
                            <option value="Rusak"<?php echo ($apr->kondisi_handle == "Rusak")? "selected=\"on\"" : "" ?>>Rusak</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kondisi Lock Pin</label>
                    <div class="col-sm-10">
                        <select name="lock_pin" class="form-control">
                            <option value="Baik"<?php echo ($apr->lock_pin == "Baik")? "selected=\"on\"" : "" ?>>Baik</option>
                            <option value="Rusak"<?php echo ($apr->lock_pin == "Rusak")? "selected=\"on\"" : "" ?>>Rusak</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Penempatan</label>
                    <div class="col-sm-10">
                        <select name="kondisi_apar" class="form-control">
                            <option value="Baik"<?php echo ($apr->kondisi_apar == "Baik")? "selected=\"on\"" : "" ?>>Baik</option>
                            <option value="Rusak"<?php echo ($apr->kondisi_apar == "Rusak")? "selected=\"on\"" : "" ?>>Rusak</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Rambu - Rambu</label>
                    <div class="col-sm-10">
                        <select name="rambu_apar" class="form-control">
                            <option value="Baik"<?php echo ($apr->rambu_apar == "Baik")? "selected=\"on\"" : "" ?>>Baik</option>
                            <option value="Rusak"<?php echo ($apr->rambu_apar == "Rusak")? "selected=\"on\"" : "" ?>>Rusak</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" name="keterangan" value="<?php echo $apr->keterangan ?>" class="form-control">
                    </div>
                </div> <br>
                
            <center>
                <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
                <button type="reset" class="btn btn-danger btn-sm">RESET</button>
                <a href="<?php echo base_url('apar/index') ?>" class="btn btn-sm btn-warning">KEMBALI</i></a></center>
            </form>
        <?php } ?>
    </section><br>
</div>