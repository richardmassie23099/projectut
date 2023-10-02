            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-first">
                            <h3>ALAT PEMADAM API RINGAN</h3>
                        </div>
                        <div class="col-12 col-md-12 order-md-2 order-last">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>adm/dashesr">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Alat Pemadam Api Ringan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div><hr>
            </div>

            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="card">
                                <div class="card-body"><center>
                                <?php if ($_SESSION['hak_akses'] == 'ESR' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi bi-plus"></i> Tambahkan Data
                                    </button>

                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-printer"></i> Print Laporan
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?php echo base_url('apar/print_apar') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Print Semua Data</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url('apar/cetak_apar') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Pilihan Lain</a></li>
                                        </ul>
                                    </div>
                                <?php } ?>
                                <br><br>

                                <!-- <div class="row">
                                    <div class="col-md">
                                        <form action="<?php echo base_url('apar/index') ; ?>" method="POST">
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
                                                <th class="text-center">Kode</th>
                                                <th class="text-center">Lokasi</th>
                                                <th class="text-center" colspan="4">Komponen Pengecekan</th>
                                                <th class="text-center">Ket</th>
                                                <?php if ($_SESSION['hak_akses'] == 'O' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                    <th class="text-center" colspan="3">ACTION</th>
                                                <?php } ?>
                                            </tr>
                                                <!-- <tr class="bg-secondary">
                                                    <th>Visual</th>
                                                    <th>Arah Jarum</th>
                                                    <th>Kondisi Segel</th>
                                                    <th>Kondisi Isi</th>
                                                    <th>Kondisi Hose</th>
                                                    <th>Kondisi Handle</th>
                                                    <th>Lock Pin</th>
                                                    <th>Penempatan</th>
                                                    <th>Rambu</th>
                                                </tr> -->
                                        </thead>

                                        <tbody>
                                            <?php foreach ($apar as $apr) : ?>
                                                <tr>
                                                    <td><?php echo ++$start ?>.</td>
                                                    <td><?php echo $apr['tanggal'] ?></td>
                                                    <td>0<?php echo $apr['no_apar'] ?></td>
                                                    <td><?php echo $apr['lokasi'] ?></td>
                                                    <td>
                                                        <?php
                                                            if ($apr['kondisi_visual'] == "Baik") {
                                                                echo "<h5><span class='badge bg-primary'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                            }else{
                                                                echo "<h5><span class='badge bg-secondary'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <!-- <td>
                                                        <?php
                                                            if ($apr['arah_jarum'] == "Posisi HIJAU") {
                                                                echo "<h5><span class='badge bg-primary'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                            }else{
                                                                echo "<h5><span class='badge bg-secondary'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                            }
                                                        ?>
                                                    </td> -->
                                                <!--
                                                    <td>
                                                        <?php
                                                            if ($apr['kondisi_segel'] == "Baik") {
                                                                echo "<h5><span class='badge bg-primary'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                            }else{
                                                                echo "<h5><span class='badge bg-secondary'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            if ($apr['kondisi_isi'] == "Baik") {
                                                                echo "<h5><span class='badge bg-primary'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                            }else{
                                                                echo "<h5><span class='badge bg-secondary'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            if ($apr['kondisi_hose'] == "Baik") {
                                                                echo "<h5><span class='badge bg-primary'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                            }else{
                                                                echo "<h5><span class='badge bg-secondary'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            if ($apr['kondisi_handle'] == "Baik") {
                                                                echo "<h5><span class='badge bg-primary'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                            }else{
                                                                echo "<h5><span class='badge bg-secondary'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                            }
                                                        ?>
                                                    </td>
                                                -->
                                                    <td>
                                                        <?php
                                                            if ($apr['lock_pin'] == "Baik") {
                                                                echo "<h5><span class='badge bg-primary'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                            }else{
                                                                echo "<h5><span class='badge bg-secondary'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            if ($apr['kondisi_apar'] == "Baik") {
                                                                echo "<h5><span class='badge bg-primary'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                            }else{
                                                                echo "<h5><span class='badge bg-secondary'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            if ($apr['rambu_apar'] == "Baik") {
                                                                echo "<h5><span class='badge bg-primary'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                            }else{
                                                                echo "<h5><span class='badge bg-secondary'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $apr['keterangan'] ?></td>
                                                    <td><?php echo anchor('apar/detail_apar/'.$apr['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                                                    <?php if ($_SESSION['hak_akses'] == 'ESR' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                        <td><?php echo anchor('apar/edit_apar/'.$apr['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                                        <td onclick="javascript: return confirm('Anda Yakin Untuk Meng - HAPUS Data Ini ?')"><?php echo anchor('apar/hapus/'.$apr['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        
                                        <!-- <?php if (empty($apar)) : ?>
                                            <tr>
                                                <td colspan="12">
                                                    <div class="alert alert-primary" role="alert"><center>
                                                        <h4>Data <b>TIDAK</b> ditemukan !! </h4></center>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif ; ?> -->
                                    </table>
                                </div>

                                <!-- <div class="row">
                                    <div class="col">
                                        <?php echo $this->pagination->create_links() ; ?>
                                    </div>
                                </div> -->

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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Input Monitoring Kondisi APAR</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('apar/tambah_aksi') ; ?>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tanggal" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kode</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="no_apar" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Lokasi</label>
                                    <div class="col-sm-10">
                                        <select name="lokasi" class="form-control">
                                            <option selected disabled> </option>
                                            <option>Gedung UT School</option>
                                            <option>Gedung TTA</option>
                                            <option>Workshop</option>
                                            <option>Warehouse</option>
                                            <option>Office</option>
                                            <option>Pos Security</option>
                                            <option>Parkiran Motor</option>
                                            <option>Area Genset</option>
                                            <option>Gudang Bahan B3</option>
                                            <option>Ruang Mesin Pompa</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kondisi Visual</label>
                                    <div class="col-sm-10">
                                        <select name="kondisi_visual" class="form-control">
                                            <option selected disabled> </option>
                                            <option>Baik</option>
                                            <option>Rusak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Arah Jarum</label>
                                    <div class="col-sm-10">
                                        <select name="arah_jarum" class="form-control">
                                            <option selected disabled> </option>
                                            <option>Posisi HIJAU</option>
                                            <option>DILUAR HIJAU</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kondisi Segel</label>
                                    <div class="col-sm-10">
                                        <select name="kondisi_segel" class="form-control">
                                            <option selected disabled> </option>
                                            <option>Baik</option>
                                            <option>Rusak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kondisi Isi</label>
                                    <div class="col-sm-10">
                                        <select name="kondisi_isi" class="form-control">
                                            <option selected disabled> </option>
                                            <option>Baik</option>
                                            <option>Rusak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kondisi Hose</label>
                                    <div class="col-sm-10">
                                        <select name="kondisi_hose" class="form-control">
                                            <option selected disabled> </option>
                                            <option>Baik</option>
                                            <option>Rusak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kondisi Handle</label>
                                    <div class="col-sm-10">
                                        <select name="kondisi_handle" class="form-control">
                                            <option selected disabled> </option>
                                            <option>Baik</option>
                                            <option>Rusak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Lock Pin</label>
                                    <div class="col-sm-10">
                                        <select name="lock_pin" class="form-control">
                                            <option selected disabled> </option>
                                            <option>Baik</option>
                                            <option>Rusak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Penempatan</label>
                                    <div class="col-sm-10">
                                        <select name="kondisi_apar" class="form-control">
                                            <option selected disabled> </option>
                                            <option>Baik</option>
                                            <option>Rusak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Rambu</label>
                                    <div class="col-sm-10">
                                        <select name="rambu_apar" class="form-control">
                                            <option selected disabled> </option>
                                            <option>Baik</option>
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

                                <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Foto</label>
                                    <div class="custom-file col-sm-10">
                                        <!-- <input type="file" name="foto" class="custom-file-input"> -->
                                        <input class="form-control" name="foto" id="formFileSm" type="file">
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
