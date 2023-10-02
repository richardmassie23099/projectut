
            <div class="page-heading">
                <h3>KOTAK P3K - PORTABLE FAK (5-10 Orang)</h3>
                <hr>
            </div>

            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="card">
                                <div class="card-body"><center>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi bi-plus"></i> Tambahkan Data
                                    </button>

                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-printer"></i> Print Laporan
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?php echo base_url('medik2/print_medik2') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Print Semua Data</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('medik2/cetak_medik2') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Pilihan Lain</a></li>
                                    </ul>
                                </div>
                                <br><br>

                                <!-- <div class="row">
                                    <div class="col-md">
                                        <form action="<?php echo base_url('medik2/index') ; ?>" method="POST">
                                            <div class="input-group mb-3">
                                            <input class="form-control form-control-sm" type="search" name="keyword" placeholder="Search. . ." aria-label="Search" autocomplete="off">
                                                <div class="input-group-append">
                                                    <input class="btn btn-primary btn-sm" type="submit" name="submit"></input>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> -->

                                <div class="table-responsive">
                                    <table class="table text-center" id="table1">
                                        <thead>                            
                                            <tr class="table-secondary">
                                                <th class="text-center" style="width: 10px">No.</th>
                                                <th class="text-center">Tanggal</th>
                                                <th class="text-center">Penggunaan</th>
                                                <th class="text-center">Dimensi</th>
                                                <th class="text-center">Bahan/Obat</th>
                                                <th class="text-center">Kondisi</th>
                                                <th class="text-center">Jumlah</th>
                                                <th class="text-center">Keterangan</th>
                                                <?php if ($_SESSION['hak_akses'] == 'O' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                    <th class="text-center" colspan="3">ACTION</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>    

                                        <tbody>
                                            <?php foreach ($medik2 as $med) : ?>
                                                <tr>
                                                    <td><?php echo ++$start ?>.</td>
                                                    <td><?php echo $med['tanggal'] ?></td>
                                                    <td><?php echo $med['penggunaan'] ?></td>
                                                    <td><?php echo $med['dimensi'] ?></td>
                                                    <td><?php echo $med['nama_obat'] ?></td>
                                                    <td>
                                                        <?php
                                                            if ($med['kondisi'] == "Baik") {
                                                                echo "<h5><span class='btn btn-sm btn-primary'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                            }elseif ($med['kondisi'] == "Tidak Ada") {
                                                                echo "<h5><span class='btn btn-sm btn-secondary'><i class='fas fa-solid'>&#451;</i></span></h5>";
                                                            }else{
                                                                echo "<h5><span class='btn btn-sm btn-danger'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $med['jumlah'] ?> <?php echo $med['satuan'] ?></td>
                                                    <td><?php echo $med['keterangan'] ?></td>
                                                    <!-- <td><?php echo anchor('medik2/detail_medik2/'.$med['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td> -->
                                                    <?php if ($_SESSION['hak_akses'] == 'O' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                        <td><?php echo anchor('medik2/edit_medik2/'.$med['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                                        <td onclick="javascript: return confirm('Anda Yakin Untuk Meng - HAPUS Data Ini ?')"><?php echo anchor('medik2/hapus/'.$med['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        
                                        <?php if (empty($medik2)) : ?>
                                            <tr>
                                                <td colspan="12">
                                                    <div class="alert alert-primary" role="alert"><center>
                                                        <h4>Data <b>TIDAK</b> ditemukan !! </h4></center>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif ; ?>
                                    </table>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <?php echo $this->pagination->create_links() ; ?>
                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Input Kondisi Portable FAK (5-10 Orang)</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('medik2/tambah_aksi') ; ?>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Penggunaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="penggunaan" class="form-control" value="Portable FAK (5-10 Orang)" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Dimensi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="dimensi" class="form-control" value="30 x 24 x 18" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tanggal" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Bahan</label>
                                    <div class="col-sm-10">
                                        <select name="nama_obat" class="form-control">
                                            <option selected disabled> </option>
                                            <option>Pembalut Segitiga</option>
                                            <option>Kassa Steril</option>
                                            <option>Perban 5 cm</option>
                                            <option>Perban 10 cm</option>
                                            <option>Elastic Bandage 5 cm</option>
                                            <option>Elastic Bandage 10 cm</option>
                                            <option>Plaster Cepat Jumbo Hansaplas</option>
                                            <option>Plaster Cepat Biasa Hansaplas</option>
                                            <option>Plester Gulung</option>
                                            <option>Pembalut Wanita</option>
                                            <option>Cotton Buds</option>
                                            <option>Masker Disposable</option>
                                            <option>Sarung Tangan Latex</option>
                                            <option>Povidone Iodine 60 ml</option>
                                            <option>Chlor Ethyl</option>
                                            <option>Alcohol Swab</option>
                                            <option>Oxycan, CPR Mask</option>
                                            <option>Handyclean 15 ml</option>
                                            <option>Gunting Pembalut, 1 Pinset, 1 Senter</option>
                                            <option>Emergency Blanket, 1 Handmed Bag</option>
                                            <option>Buku Petunjuk P3K</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Satuan</label>
                                    <div class="col-sm-10">
                                        <select name="satuan" class="form-control">
                                            <option selected disabled> </option>
                                            <option>Pcs</option>
                                            <option>Roll</option>
                                            <option>Pack</option>
                                            <option>Botol</option>
                                            <option>Box</option>
                                            <option>Buah</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jumlah</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="jumlah" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kondisi</label>
                                    <div class="col-sm-10">
                                        <select name="kondisi" class="form-control">
                                            <option selected disabled> </option>
                                            <option>Baik</option>
                                            <option>Tidak Ada</option>
                                            <option>Rusak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="keterangan" class="form-control">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="RESET" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Reset</button>
                                    <button type="SUBMIT" class="btn btn-sm btn-primary">Save</button>
                                </div>

                            <?php form_close() ; ?>
                        </div>
                    </div>
                </div>
            </div>
