<div class="content-wrapper">
    <section class="content">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12">
        <br><center>
            <h2><strong>Edit Kondisi Portable FAK (2-5 Orang)</strong></h2>
        <br><br> </center>
        <?php foreach ($medik3 as $med)  { ?>
            <form action="<?php echo base_url().'medik3/update' ; ?>" method="post">

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
                            <option value="Pembalut Segitiga (mitela)"<?php echo ($med->nama_obat == "Pembalut Segitiga (mitela)")? "selected=\"on\"" : "" ?>>Pembalut Segitiga (mitela)</option>
                            <option value="Kassa Steril 16x16 cm"<?php echo ($med->nama_obat == "Kassa Steril 16x16 cm")? "selected=\"on\"" : "" ?>>Kassa Steril 16x16 cm</option>
                            <option value="Kassa Steril 10x10 cm"<?php echo ($med->nama_obat == "Perban 5 cm")? "selected=\"on\"" : "" ?>>Perban 5 cm</option>
                            <option value="Kassa Steril 5x5 cm"<?php echo ($med->nama_obat == "Kassa Steril 5x5 cm")? "selected=\"on\"" : "" ?>>Kassa Steril 5x5 cm</option>
                            <option value="Gulung Kassa 5 cm"<?php echo ($med->nama_obat == "Gulung Kassa 5 cm")? "selected=\"on\"" : "" ?>>Gulung Kassa 5 cm</option>
                            <option value="Gulung Kassa 10 cm"<?php echo ($med->nama_obat == "Gulung Kassa 10 cm")? "selected=\"on\"" : "" ?>>Gulung Kassa 10 cm</option>
                            <option value="Sarung Tangan Latex"<?php echo ($med->nama_obat == "Sarung Tangan Latex")? "selected=\"on\"" : "" ?>>Sarung Tangan Latex</option>
                            <option value="Masker Disposable"<?php echo ($med->nama_obat == "Masker Disposable")? "selected=\"on\"" : "" ?>>Masker Disposable</option>
                            <option value="Plaster Cepat Jumbo"<?php echo ($med->nama_obat == "Plaster Cepat Jumbo")? "selected=\"on\"" : "" ?>>Plaster Cepat Jumbo</option>
                            <option value="Plaster Cepat Biasa"<?php echo ($med->nama_obat == "Plaster Cepat Biasa")? "selected=\"on\"" : "" ?>>Plaster Cepat Biasa</option>
                            <option value="Emergency Blanket"<?php echo ($med->nama_obat == "Emergency Blanket")? "selected=\"on\"" : "" ?>>Emergency Blanket</option>
                            <option value="Povidone Iodine 30 ml"<?php echo ($med->nama_obat == "Povidone Iodine 30 ml")? "selected=\"on\"" : "" ?>>Povidone Iodine 30 ml</option>
                            <option value="Elastic Bandage 3"<?php echo ($med->nama_obat == "Elastic Bandage 3")? "selected=\"on\"" : "" ?>>Elastic Bandage 3</option>
                            <option value="Cotton Buds"<?php echo ($med->nama_obat == "Cotton Buds")? "selected=\"on\"" : "" ?>>Cotton Buds</option>
                            <option value="Plester Gulung Besar"<?php echo ($med->nama_obat == "Plester Gulung Besar")? "selected=\"on\"" : "" ?>>Plester Gulung Besar</option>
                            <option value="Gunting Pembalut"<?php echo ($med->nama_obat == "Gunting Pembalut")? "selected=\"on\"" : "" ?>>Gunting Pembalut</option>
                            <option value="Pinset"<?php echo ($med->nama_obat == "Pinset")? "selected=\"on\"" : "" ?>>Pinset</option>
                            <option value="Alcohol Swab"<?php echo ($med->nama_obat == "Alcohol Swab")? "selected=\"on\"" : "" ?>>Alcohol Swab</option>
                            <option value="Waist Bag"<?php echo ($med->nama_obat == "Waist Bag")? "selected=\"on\"" : "" ?>>Waist Bag</option>
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
                <a href="<?php echo base_url('medik3/index') ?>" class="btn btn-sm btn-warning">KEMBALI</i></a></center>
            </form>
        <?php } ?>
    </section><br>
</div>