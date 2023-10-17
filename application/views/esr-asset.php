            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-first">
                            <h3>DATA ASSET</h3>
                        </div>
                        <div class="col-12 col-md-12 order-md-2 order-last">
                            <!-- <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>adm/dashesr">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Magang - PKL</li>
                                </ol>
                            </nav> -->
                        </div>
                    </div>
                </div><hr>
            </div>

            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="card">
                                <center><br>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi bi-plus"></i> Tambahkan Data
                                    </button>
                                <?php if ($_SESSION['hak_akses'] == 'ESR' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                    <a class="btn btn-success btn-sm" href="<?php echo base_url('asset/print_asset') ?>" role="button">
                                        <i class="bi bi-printer"></i> Print Laporan
                                    </a>
                                <?php } ?>
                                <br><br>
                                    
                                <!-- <div class="row">
                                    <div class="col-md">
                                        <form action="<?php echo base_url('asset/index') ; ?>" method="POST">
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
                                                <th class="text-center">No Asset</th>
                                                <th class="text-center">Class</th>
                                                <th class="text-center">Cap Date</th>
                                                <th class="text-center">Deskripsi</th>
                                                <th class="text-center">Lokasi</th>
                                                <th class="text-center">Deskripsi Lokasi</th>
                                               
                                                <th class="text-center" colspan="3">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($asset as $kry) : ?>
                                                <tr>
                                                    <td><?php echo ++$start ?></td>
                                                    <td><?php echo $kry['no_asset'] ?></td>
                                                    <td><?php echo $kry['class'] ?></td>
                                                    <td><?php echo $kry['cap_date'] ?></td>
                                                    <td><?php echo $kry['deskripsi'] ?></td>
                                                    <td><?php echo $kry['lokasi'] ?></td>
                                                    <td><?php echo $kry['deskripsi_lokasi'] ?></td>
                                            
                                                        <td><?php echo anchor('asset/detail_asset/'.$kry['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                                                    <?php if ($_SESSION['hak_akses'] == 'ESR' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                        <td><?php echo anchor('asset/edit_asset/'.$kry['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                                        <td onclick="javascript: return confirm('Anda Yakin Untuk Meng - HAPUS Data Ini ?')"><?php echo anchor('asset/hapus/'.$kry['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        
                                        <?php if (empty($asset)) : ?>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Input Data Magang / PKL</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('asset/tambah_aksi') ; ?>
                                <div class="form-group">
                                    <label>No Asset</label>
                                    <input type="number" name="no_asset" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Class</label>
                                    <input type="text" name="class" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Cap Date</label>
                                    <input type="date" name="cap_date" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <input type="text" name="lokasi" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi Lokasi</label>
                                    <input type="text" name="deskripsi_lokasi" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Acq value</label>
                                    <input type="number" name="acq_value" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Dep value</label>
                                    <input type="number" name="dep_value" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Book value</label>
                                    <input type="text" name="book_value" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Kondisi</label>
                                    <select class="form-select" name="kondisi" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">Baik</option>
                                        <option value="2">Rusak</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>utilisasi</label>
                                    <select class="form-select" name="utilisasi" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Hilang</label>
                                    <input type="text" name="hilang" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control">
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
