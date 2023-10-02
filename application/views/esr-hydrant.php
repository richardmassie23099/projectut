            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-first">
                            <h3>PEMADAM HYDRANT</h3>
                        </div>
                        <div class="col-12 col-md-12 order-md-2 order-last">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>adm/dashesr">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Hydrant</li>
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
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi bi-plus"></i> Tambahkan Data
                                    </button>

                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-printer"></i> Print Laporan
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?php echo base_url('hydrant/print_hydrant') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Print Semua Data</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('hydrant/cetak_hydrant') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Pilihan Lain</a></li>
                                    </ul>
                                </div>
                                <br><br>

                                <!-- <div class="row">
                                    <div class="col-md">
                                        <form action="<?php echo base_url('hydrant/index') ; ?>" method="POST">
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
                                                <th class="text-center" style="width: 10px" rowspan="2">No.</th>
                                                <th class="text-center" rowspan="2">Tanggal</th>
                                                <th class="text-center" rowspan="2">Kode</th>
                                                <th class="text-center" rowspan="2">Lokasi</th>
                                                <th class="text-center" colspan="4">Komponen Pengecekan</th>
                                                <th class="text-center" rowspan="2" style="width: 200px">Keterangan</th>
                                                <?php if ($_SESSION['hak_akses'] == 'O' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                    <th class="text-center" rowspan="2" colspan="3">ACTION</th>
                                                <?php } ?>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Hose</th>
                                                <th class="text-center">Nozzle</th>
                                                <th class="text-center">Lock Pin</th>
                                                <th class="text-center">Kebocoran</th>
                                            </tr>
                                        </thead>   

                                        <tbody>
                                            <?php foreach ($hydrant as $hyd) : ?>
                                                <tr>
                                                    <td><?php echo ++$start ?>.</td>
                                                    <td><?php echo $hyd['tanggal'] ?></td>
                                                    <td><?php echo $hyd['no_hydrant'] ?></td>
                                                    <td><?php echo $hyd['lokasi'] ?></td>
                                                    <td>
                                                        <?php
                                                            if ($hyd['kondisi_hose'] == "Baik") {
                                                                echo "<h5><span class='btn btn-sm btn-primary'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                            }else{
                                                                echo "<h5><span class='btn btn-sm btn-secondary'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            if ($hyd['kondisi_nozzle'] == "Baik") {
                                                                echo "<h5><span class='btn btn-sm btn-primary'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                            }else{
                                                                echo "<h5><span class='btn btn-sm btn-secondary'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            if ($hyd['lock_pin'] == "Baik") {
                                                                echo "<h5><span class='btn btn-sm btn-primary'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                            }else{
                                                                echo "<h5><span class='btn btn-sm btn-secondary'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                            }
                                                        ?>
                                                    </td>                                                        
                                                    <td>
                                                        <?php
                                                            if ($hyd['kebocoran'] == "Baik") {
                                                                echo "<h5><span class='btn btn-sm btn-primary'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                            }else{
                                                                echo "<h5><span class='btn btn-sm btn-secondary'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $hyd['keterangan'] ?></td>
                                                    <td><?php echo anchor('hydrant/detail_hydrant/'.$hyd['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                                                    <?php if ($_SESSION['hak_akses'] == 'O' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                        <td><?php echo anchor('hydrant/edit_hydrant/'.$hyd['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                                        <td onclick="javascript: return confirm('Anda Yakin Untuk Meng - HAPUS Data Ini ?')"><?php echo anchor('hydrant/hapus/'.$hyd['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        
                                        <?php if (empty($hydrant)) : ?>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Input Monitoring Hydrant</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('hydrant/tambah_aksi') ; ?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggal" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kode</label>
                                <div class="col-sm-10">
                                    <input type="number" name="no_hydrant" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="lokasi" class="form-control">
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
                                <label class="col-sm-2 col-form-label">Kondisi Nozzle</label>
                                <div class="col-sm-10">
                                    <select name="kondisi_nozzle" class="form-control">
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
                                <label class="col-sm-2 col-form-label">Stand</label>
                                <div class="col-sm-10">
                                    <select name="stand_hydrant" class="form-control">
                                        <option selected disabled> </option>
                                        <option>Baik</option>
                                        <option>Rusak</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kebocoran</label>
                                <div class="col-sm-10">
                                    <select name="kebocoran" class="form-control">
                                        <option selected disabled> </option>
                                        <option>Baik</option>
                                        <option>Bocor</option>
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
