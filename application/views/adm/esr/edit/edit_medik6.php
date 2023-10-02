<div class="content-wrapper">
    <section class="content">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12">
        <br><center>
            <h2><strong>Edit Kondisi Gedung</strong></h2>
        <br><br> </center>
        <?php foreach ($medik6 as $med)  { ?>
            <form action="<?php echo base_url().'medik6/update' ; ?>" method="post">

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
                            <option value="Kapas Putih 300 gram"<?php echo ($med->nama_obat == "Kapas Putih 300 gram")? "selected=\"on\"" : "" ?>>Kapas Putih 300 gram</option>
                            <option value="Pembalut Gulung Lebar 10 cm"<?php echo ($med->nama_obat == "Pembalut Gulung Lebar 10 cm")? "selected=\"on\"" : "" ?>>Pembalut Gulung Lebar 10 cm</option>
                            <option value="Pembalut Segitiga (mitela)"<?php echo ($med->nama_obat == "Pembalut Segitiga (mitela)")? "selected=\"on\"" : "" ?>>Pembalut Segitiga (mitela)</option>
                            <option value="Plester Lebar 1,25 cm"<?php echo ($med->nama_obat == "Plester Lebar 1,25 cm")? "selected=\"on\"" : "" ?>>Plester Lebar 1,25 cm</option>
                            <option value="Gunting Pembalut"<?php echo ($med->nama_obat == "Gunting Pembalut")? "selected=\"on\"" : "" ?>>Gunting Pembalut</option>
                            <option value="Pinset"<?php echo ($med->nama_obat == "Pinset")? "selected=\"on\"" : "" ?>>Pinset</option>
                            <option value="Lampu Senter"<?php echo ($med->nama_obat == "Lampu Senter")? "selected=\"on\"" : "" ?>>Lampu Senter</option>
                            <option value="Buku Catatan"<?php echo ($med->nama_obat == "Buku Catatan")? "selected=\"on\"" : "" ?>>Buku Catatan</option>
                            <option value="Buku Pedoman P3K"<?php echo ($med->nama_obat == "Buku Pedoman P3K")? "selected=\"on\"" : "" ?>>Buku Pedoman P3K</option>
                            <option value="Daftar Isi Kotak P3K"<?php echo ($med->nama_obat == "Daftar Isi Kotak P3K")? "selected=\"on\"" : "" ?>>Daftar Isi Kotak P3K</option>
                            <option value="Alcohol 70 %"<?php echo ($med->nama_obat == "Alcohol 70 %")? "selected=\"on\"" : "" ?>>Alcohol 70 %</option>
                            <option value="Aquades (100 ml lar. Saline)"<?php echo ($med->nama_obat == "Aquades (100 ml lar. Saline)")? "selected=\"on\"" : "" ?>>Aquades (100 ml lar. Saline)</option>
                            <option value="Gelas untuk Cuci Mata"<?php echo ($med->nama_obat == "Gelas untuk Cuci Mata")? "selected=\"on\"" : "" ?>>Gelas untuk Cuci Mata</option>
                            <option value="Masker"<?php echo ($med->nama_obat == "Masker")? "selected=\"on\"" : "" ?>>Masker</option>
                            <option value="Sarung Tangan 1x Pakai (sepasang)"<?php echo ($med->nama_obat == "Sarung Tangan 1x Pakai (sepasang)")? "selected=\"on\"" : "" ?>>Sarung Tangan 1x Pakai (sepasang)</option>
                            <option value="Peniti"<?php echo ($med->nama_obat == "Peniti")? "selected=\"on\"" : "" ?>>Peniti</option>
                            <option value="Sanmol Tab"<?php echo ($med->nama_obat == "Sanmol Tab")? "selected=\"on\"" : "" ?>>Sanmol Tab</option>
                            <option value="Dexanta Tab"<?php echo ($med->nama_obat == "Dexanta Tab")? "selected=\"on\"" : "" ?>>Dexanta Tab</option>
                            <option value="Plester Cepat / Hansaplast"<?php echo ($med->nama_obat == "Plester Cepat / Hansaplast")? "selected=\"on\"" : "" ?>>Plester Cepat / Hansaplast</option>
                            <option value="Cairan Nacl 100 ml"<?php echo ($med->nama_obat == "Cairan Nacl 100 ml")? "selected=\"on\"" : "" ?>>Cairan Nacl 100 ml</option>
                            <option value="Septadin Sol"<?php echo ($med->nama_obat == "Septadin Sol")? "selected=\"on\"" : "" ?>>Septadin Sol</option>
                            <option value="Lafalos Cream"<?php echo ($med->nama_obat == "Lafalos Cream")? "selected=\"on\"" : "" ?>>Lafalos Cream</option>
                            <option value="Bioplacentol cr"<?php echo ($med->nama_obat == "Bioplacentol cr")? "selected=\"on\"" : "" ?>>Bioplacentol cr</option>
                            <option value="Alcohol Swab"<?php echo ($med->nama_obat == "Alcohol Swab")? "selected=\"on\"" : "" ?>>Alcohol Swab</option>
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
                <a href="<?php echo base_url('medik6/index') ?>" class="btn btn-sm btn-warning">KEMBALI</i></a></center>
            </form>
        <?php } ?>
    </section><br>
</div>