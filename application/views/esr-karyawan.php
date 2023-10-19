            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-first">
                            <h3>DATA KARYAWAN</h3>
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
                                    <a class="btn btn-success btn-sm" href="<?php echo base_url('karyawan/print_mahasiswa') ?>" role="button">
                                        <i class="bi bi-printer"></i> Print Laporan
                                    </a>
                                <?php } ?>
                                <br><br>
                                    
                                <!-- <div class="row">
                                    <div class="col-md">
                                        <form action="<?php echo base_url('karyawan/index') ; ?>" method="POST">
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
                                                <th class="text-center">NRP</th>
                                                <th class="text-center">NAMA KARYAWAN</th>
                                                <th class="text-center">COMPANY</th>
                                                <th class="text-center">LOKASI</th>
                                                <th class="text-center">DEPARTEMENT</th>
                                                <th colspan="3" class="text-center">Action</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($karyawan as $kry) : ?>
                                                <tr>
                                                    <td><?php echo ++$start ?></td>
                                                    <td><?php echo $kry['nrp'] ?></td>
                                                    <td><?php echo $kry['nama_karyawan'] ?></td>
                                                    <td><?php echo $kry['company'] ?></td>
                                                    <td><?php echo $kry['lokasi'] ?></td>
                                                    <td><?php echo $kry['departement'] ?></td>
                                                        <td><?php echo anchor('karyawan/detail_karyawan/'.$kry['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                                                    <?php if ($_SESSION['hak_akses'] == 'ESR' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                        <td><?php echo anchor('karyawan/edit_karyawan/'.$kry['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                                        <td onclick="javascript: return confirm('Anda Yakin Untuk Meng - HAPUS Data Ini ?')"><?php echo anchor('karyawan/hapus/'.$kry['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        
                                        <?php if (empty($karyawan)) : ?>
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
                            <?php echo form_open_multipart('karyawan/tambah_aksi') ; ?>
                                <div class="form-group">
                                    <label>NRP</label>
                                    <input type="text" name="nrp" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Nama karyawan</label>
                                    <input type="text" name="nama_karyawan" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" name="company" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <input type="text" name="lokasi" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Departement</label>
                                    <select class="form-select" name="departement" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">ADM</option>
                                        <option value="2">SVC</option>
                                        <option value="3">PRT</option>
                                        <option value="4">SOD-TSO</option>
                                        <!-- <option value="5">five</option> -->
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label>Posisi</label>
                                    <input type="text" name="posisi" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tempat lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Status keluarga</label>
                                    <!-- <input type="text" name="status_keluarga" class="form-control"> -->
                                    <select class="form-select" name="status_keluarga" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">Menikah</option>
                                        <option value="2">Belum menikah</option>
                                        <!-- <option value="3">Three</option> -->
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label>Jumlah anak</label>
                                    <!-- <input type="text" name="jumlah_anak" class="form-control"> -->
                                    <select class="form-select" name="jumlah_anak" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <!-- <option value="7">seven</option> -->
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label>Tanggal mulai bekerja</label>
                                    <input type="date" name="tanggal_mulai_bekerja" class="form-control">
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
