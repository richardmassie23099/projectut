            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-first">
                            <h3>DEKLARASI KARYAWAN</h3>
                        </div>
                        <div class="col-12 col-md-12 order-md-2 order-last">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>adm/dashkasir">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Deklarasi Karyawan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div><hr>
            </div>

            <div class="page-content">
                <div class="page-title">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="card">
                                <center><br>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi bi-plus"></i> <b>Tambahkan Data</b>
                                    </button>
                                <?php if ($_SESSION['hak_akses'] == 'O') { ?>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-printer"></i> <b>Print Laporan</b>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?php echo base_url('deklarasi/print_deklarasi') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Print Semua Data</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('deklarasi/cetak_deklarasi') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Pilihan Lain</a></li>
                                    </ul>
                                </div>
                                <?php } ?>
                                <br><br>

                                <!-- <div class="row">
                                    <div class="col-md">
                                        <form action="<?php echo base_url('deklarasi/index') ; ?>" method="POST">
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
                                                <th class="text-center">NRP</th>
                                                <?php if ($_SESSION['hak_akses'] == 'A' or $_SESSION['hak_akses'] == 'GA' or $_SESSION['hak_akses'] == 'KASIR' ) { ?>
                                                    <th class="text-center">ADH</th>
                                                    <th class="text-center">GA</th>
                                                    <th class="text-center">KASIR</th>
                                                <?php } ?>
                                                <th class="text-center">Status</th>
                                                <?php if ($_SESSION['hak_akses'] == 'A' ) { ?>
                                                    <th class="text-center" colspan="3">ACTION</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php foreach ($deklarasi as $pmh) : ?>
                                            <tr>
                                                <td><?php echo ++$start ?>.</td>
                                                <td><?php echo $pmh['tanggal'] ?></td>
                                                <td><?php echo $pmh['nrp'] ?></td>
                                            <?php if ($_SESSION['hak_akses'] == 'A' or $_SESSION['hak_akses'] == 'GA' or $_SESSION['hak_akses'] == 'KASIR' ) { ?>
                                                <td>
                                                    <?php
                                                        if ($pmh['approval_1'] == "Setuju") {
                                                            echo "<h5><span class='badge bg-success'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                        }else{
                                                            echo "<h5><span class='badge bg-danger'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        if ($pmh['approval_2'] == "Setuju") {
                                                            echo "<h5><span class='badge bg-success'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                        }else{
                                                            echo "<h5><span class='badge bg-danger'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        if ($pmh['approval_3'] == "Setuju") {
                                                            echo "<h5><span class='badge bg-success'><i class='fas fa-solid'>&#10004;</i></span></h5>";
                                                        }else{
                                                            echo "<h5><span class='badge bg-danger'><i class='fas fa-solid'>&#10006;</i></span></h5>";
                                                        }
                                                    ?>
                                                </td>
                                                <?php } ?>
                                                <td>
                                                    <?php
                                                        if ($pmh['approval_3'] == "Setuju") {
                                                            echo "<h5><span class='badge bg-success'><i class='fas fa-solid'>Approved</i></span></h5>";
                                                        }else{
                                                            echo "<h5><span class='badge bg-warning text-black'><i class='fas fa-solid'>Pending</i></span></h5>";
                                                        }
                                                    ?>
                                                </td>
                                                <?php if ($_SESSION['hak_akses'] == 'A' or $_SESSION['hak_akses'] == 'ADH' or $_SESSION['hak_akses'] == 'GA' or $_SESSION['hak_akses'] == 'KASIR' ) { ?>
                                                    <!-- <td><?php echo anchor('deklarasi/detail_deklarasi/'.$pmh['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td> -->
                                                    <td><?php echo anchor('deklarasi/edit_approv/'.$pmh['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                                <?php } ?>
                                                <?php if ($_SESSION['hak_akses'] == 'A' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                    <td><?php echo anchor('deklarasi/edit_deklarasi/'.$pmh['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                                    <td onclick="javascript: return confirm('Anda Yakin Untuk Meng - HAPUS Data Ini ?')"><?php echo anchor('deklarasi/hapus/'.$pmh['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                                <?php } ?>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        
                                        <?php if (empty($deklarasi)) : ?>
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
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Input Deklarasi Karyawan</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <?php echo form_open_multipart('deklarasi/tambah_aksi') ; ?>
                            <section class="section">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="basicInput">Tanggal</label>
                                                    <input type="date" name="tanggal" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="helpInputTop">Keperluan</label>
                                                    <textarea type="text" name="keperluan" class="form-control"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="helpInputTop">Amount</label>
                                                    <input type="text" name="amount" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="helpInputTop">Keterangan</label>
                                                    <input type="text" name="keterangan" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="helpInputTop">NRP</label>
                                                    <input type="text" name="nrp" class="form-control">
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="disabledInput">Tanggal Deklarasi</label>
                                                    <input type="date" name="tanggal_deklarasi" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="disabledInput">Uang Muka</label>
                                                    <input type="number" name="uang_muka" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="disabledInput">Jumlah Pengeluaran Actual</label>
                                                    <input type="number" name="jum_keluar_act" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="disabledInput">Kembali ke</label>
                                                    <select name="kembali_ke" class="form-control">
                                                        <option selected></option>
                                                        <option>Perusahaan</option>
                                                        <option>Karyawan</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="disabledInput">Kembalian</label>
                                                    <input type="text" name="kembalian" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="disabledInput"></label>
                                                    <select name="lokasi" class="form-control">
                                                        <option selected></option>
                                                        <option>Makassar</option>
                                                        <option>Kendari</option>
                                                        <option>Pomala</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <center>
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                        <button type="RESET" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Reset</button>
                                    </center> <br>
                                </div>
                            </section>

                            <?php form_close() ; ?>
                        </div>
                    </div>
                </div>
            </div>

