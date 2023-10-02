<div class="content-wrapper">
    <section class="content">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12">
        <br><center>
            <h2><strong>Edit Kondisi Portable FAK (5-10 Orang)</strong></h2>
        <br><br> </center>
        <?php foreach ($medik2 as $med)  { ?>
            <form action="<?php echo base_url().'medik2/update' ; ?>" method="post">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $med->id ?>">
                        <input type="date" name="tanggal" value="<?php echo $med->tanggal ?>"  class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Penggunaan</label>
                    <div class="col-sm-10">
                        <input type="text" name="penggunaan" value="<?php echo $med->penggunaan ?>" class="form-control" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Dimensi</label>
                    <div class="col-sm-10">
                        <input type="text" name="dimensi" value="<?php echo $med->dimensi ?>" class="form-control" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Bahan/Obat</label>
                    <div class="col-sm-10">
                        <select name="nama_obat" class="form-control">
                            <option value="Pembalut Segitiga"<?php echo ($med->nama_obat == "Pembalut Segitiga")? "selected=\"on\"" : "" ?>>Pembalut Segitiga</option>
                            <option value="Kassa Steril"<?php echo ($med->nama_obat == "Kassa Steril")? "selected=\"on\"" : "" ?>>Kassa Steril</option>
                            <option value="Perban 5 cm"<?php echo ($med->nama_obat == "Perban 5 cm")? "selected=\"on\"" : "" ?>>Perban 5 cm</option>
                            <option value="Perban 10 cm"<?php echo ($med->nama_obat == "Perban 10 cm")? "selected=\"on\"" : "" ?>>Perban 10 cm</option>
                            <option value="Elastic Bandage 5 cm"<?php echo ($med->nama_obat == "Elastic Bandage 5 cm")? "selected=\"on\"" : "" ?>>Elastic Bandage 5 cm</option>
                            <option value="Elastic Bandage 10 cm"<?php echo ($med->nama_obat == "Elastic Bandage 10 cm")? "selected=\"on\"" : "" ?>>Elastic Bandage 10 cm</option>
                            <option value="Plaster Cepat Jumbo Hansaplas"<?php echo ($med->nama_obat == "Plaster Cepat Jumbo Hansaplas")? "selected=\"on\"" : "" ?>>Plaster Cepat Jumbo Hansaplas</option>
                            <option value="Plaster Cepat Biasa Hansaplas"<?php echo ($med->nama_obat == "Plaster Cepat Biasa Hansaplas")? "selected=\"on\"" : "" ?>>Plaster Cepat Biasa Hansaplas</option>
                            <option value="Plaster Gulung"<?php echo ($med->nama_obat == "Plaster Gulung")? "selected=\"on\"" : "" ?>>Plaster Gulung</option>
                            <option value="Pembalut Wanita"<?php echo ($med->nama_obat == "Pembalut Wanita")? "selected=\"on\"" : "" ?>>Pembalut Wanita</option>
                            <option value="Cotton Buds"<?php echo ($med->nama_obat == "Cotton Buds")? "selected=\"on\"" : "" ?>>Cotton Buds</option>
                            <option value="Masker Disposable"<?php echo ($med->nama_obat == "Masker Disposable")? "selected=\"on\"" : "" ?>>Masker Disposable</option>
                            <option value="Sarung Tangan Latex"<?php echo ($med->nama_obat == "Sarung Tangan Latex")? "selected=\"on\"" : "" ?>>Sarung Tangan Latex</option>
                            <option value="Povidone Iodine 60 ml"<?php echo ($med->nama_obat == "Povidone Iodine 60 ml")? "selected=\"on\"" : "" ?>>Povidone Iodine 60 ml</option>
                            <option value="Chlor Ethyl"<?php echo ($med->nama_obat == "Chlor Ethyl")? "selected=\"on\"" : "" ?>>Chlor Ethyl</option>
                            <option value="Alcohol Swab"<?php echo ($med->nama_obat == "Alcohol Swab")? "selected=\"on\"" : "" ?>>Alcohol Swab</option>
                            <option value="Oxycan, CPR Mask"<?php echo ($med->nama_obat == "Oxycan, CPR Mask")? "selected=\"on\"" : "" ?>>Oxycan, CPR Mask</option>
                            <option value="Handyclean 15 ml"<?php echo ($med->nama_obat == "Handyclean 15 ml")? "selected=\"on\"" : "" ?>>Handyclean 15 ml</option>
                            <option value="Gunting Pembalut, 1 Pinset, 1 Senter"<?php echo ($med->nama_obat == "Gunting Pembalut, 1 Pinset, 1 Senter")? "selected=\"on\"" : "" ?>>Gunting Pembalut, 1 Pinset, 1 Senter</option>
                            <option value="Emergency Blanket, 1 Handmed Bag"<?php echo ($med->nama_obat == "Emergency Blanket, 1 Handmed Bag")? "selected=\"on\"" : "" ?>>Emergency Blanket, 1 Handmed Bag</option>
                            <option value="Buku Petunjuk P3K"<?php echo ($med->nama_obat == "Buku Petunjuk P3K")? "selected=\"on\"" : "" ?>>Buku Petunjuk P3K</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Satuan</label>
                    <div class="col-sm-10">
                        <select name="satuan" class="form-control">
                            <option value="Pcs"<?php echo ($med->satuan == "Pcs")? "selected=\"on\"" : "" ?>>Pcs</option>
                            <option value="Roll"<?php echo ($med->satuan == "Roll")? "selected=\"on\"" : "" ?>>Roll</option>
                            <option value="Pack"<?php echo ($med->satuan == "Pack")? "selected=\"on\"" : "" ?>>Pack</option>
                            <option value="Botol"<?php echo ($med->satuan == "Botol")? "selected=\"on\"" : "" ?>>Botol</option>
                            <option value="Box"<?php echo ($med->satuan == "Box")? "selected=\"on\"" : "" ?>>Box</option>
                            <option value="Buah"<?php echo ($med->satuan == "Buah")? "selected=\"on\"" : "" ?>>Buah</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlah" value="<?php echo $med->jumlah ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kondisi</label>
                    <div class="col-sm-10">
                        <select name="kondisi" class="form-control">
                            <option value="Baik"<?php echo ($med->kondisi == "Baik")? "selected=\"on\"" : "" ?>>Baik</option>
                            <option value="Tidak Ada"<?php echo ($med->kondisi == "Tidak Ada")? "selected=\"on\"" : "" ?>>Tidak Ada</option>
                            <option value="Rusak"<?php echo ($med->kondisi == "Rusak")? "selected=\"on\"" : "" ?>>Rusak</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" name="keterangan" value="<?php echo $med->keterangan ?>" class="form-control">
                    </div>
                </div> <br>
                
                <center>
                <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
                <button type="reset" class="btn btn-danger btn-sm">RESET</button>
                <a href="<?php echo base_url('medik2/index') ?>" class="btn btn-sm btn-warning">KEMBALI</i></a></center>
            </form>
        <?php } ?>
    </section><br>
</div>