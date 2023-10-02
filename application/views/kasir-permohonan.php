            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-first">
                            <h3>FORM PERMOHONAN FASILITAS KOMUNIKASI</h3>
                        </div>
                        <div class="col-12 col-md-12 order-md-2 order-last">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>adm/dashkasir">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Permohonan</li>
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
                                        <li><a class="dropdown-item" href="<?php echo base_url('permohonan/print_permohonan') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Print Semua Data</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('permohonan/cetak_permohonan') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Pilihan Lain</a></li>
                                    </ul>
                                </div>
                                <br><br>

                                <!-- <div class="row">
                                    <div class="col-md">
                                        <form action="<?php echo base_url('permohonan/index') ; ?>" method="POST">
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
                                                <th class="text-center">Nama / NRP</th>
                                                <!-- <th>Jabatan</th> -->
                                                <!-- <th>Dept</th> -->
                                                <!-- <th>Lokasi</th> -->
                                                <!-- <th>Pengeluaran</th> -->
                                                <!-- <th>Pengganti</th> -->
                                                <!-- <th>Pemakaian</th> -->
                                                <th class="text-center">Lokasi Claim</th>
                                                <th class="text-center">Tanggal Claim</th>
                                                <?php if ($_SESSION['hak_akses'] == 'O' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                    <th class="text-center" colspan="3">ACTION</th>
                                                <?php } ?>
                                                </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($permohonan as $pmh) : ?>
                                                <tr>
                                                    <td><?php echo ++$start ?>.</td>
                                                    <td><?php echo $pmh['tanggal'] ?></td>
                                                    <td><?php echo $pmh['nama'] ?> / <?php echo $pmh['nrp'] ?></td>
                                                    <!-- <td><?php echo $pmh['jabatan'] ?></td> -->
                                                    <!-- <td><?php echo $pmh['dept'] ?></td> -->
                                                    <!-- <td><?php echo $pmh['lokasi'] ?></td> -->
                                                    <!-- <td><?php echo $pmh['pengeluaran'] ?></td> -->
                                                    <!-- <td><?php echo $pmh['pengganti'] ?></td> -->
                                                    <!-- <td><?php echo $pmh['pemakaian'] ?></td> -->
                                                    <td><?php echo $pmh['lokasi_claim'] ?></td>
                                                    <td><?php echo $pmh['tanggal_claim'] ?></td>
                                                    <td><?php echo anchor('permohonan/detail_permohonan/'.$pmh['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                                                    <!-- <td><?php echo anchor('permohonan/print_one_permohonan/'.$pmh['id'], '<div class="btn btn-success btn-sm"><i class="bi bi-printer"></i></div>') ?></td> -->
                                                    <?php if ($_SESSION['hak_akses'] == 'O' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                        <td><?php echo anchor('permohonan/edit_permohonan/'.$pmh['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                                        <td onclick="javascript: return confirm('Anda Yakin Untuk Meng - HAPUS Data Ini ?')"><?php echo anchor('permohonan/hapus/'.$pmh['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        
                                        <?php if (empty($permohonan)) : ?>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Input Permohonan Fasilitas Komunikasi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <?php echo form_open_multipart('permohonan/tambah_aksi') ; ?>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Tanggal</label>
                                    <div class="col-sm-12">
                                        <input type="date" name="tanggal" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">NRP</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="nrp" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Jabatan</label>
                                    <div class="col-sm-12">
                                        <select name="jabatan" class="form-control">
                                            <option selected disabled>- Silahkan Pilih Jabatan -</option>
                                            <option>Direksi</option>
                                            <option>Division Head / Deputy</option>
                                            <option>HO Dept Head / Deputy</option>
                                            <option>Branch Operation Head</option>
                                            <option>Kepala Perwakilan</option>
                                            <option>Dept Head Cabang / Site</option>
                                            <option>Section Head / Staff Ahli</option>
                                            <option>Supervisor</option>
                                            <option>Jabatan yang Lain</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Divisi / Dept</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="dept" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Lokasi</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="lokasi" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Besar Pengeluaran</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="pengeluaran" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Besar Pengganti</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="pengganti" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Tanggal Pemakaian</label>
                                    <div class="col-sm-12">
                                        <input type="date" name="pemakaian" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Lokasi Claim</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="lokasi_claim" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Tanggal Claim</label>
                                    <div class="col-sm-12">
                                        <input type="date" name="tanggal_claim" class="form-control">
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
