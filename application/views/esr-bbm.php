            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-first">
                            <h3>DATA PENGGUNAAN BBM</h3>
                        </div>
                        <div class="col-12 col-md-12 order-md-2 order-last">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>adm/dashesr">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Penggunaan BBM</li>
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
                                <center><br>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-plus"></i> Tambahkan Data
                                </button>
                            <?php if ($_SESSION['hak_akses'] == 'ESR' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-printer"></i> Print Laporan
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?php echo base_url('bbm/print') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Print Semua Data</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('bbm/cetak') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Pilihan Lain</a></li>
                                    </ul>
                                </div>
                            <?php } ?>
                            <br><br>

                                <!-- <div class="row">
                                    <div class="col-md">
                                        <form action="<?php echo base_url('bbm/index') ; ?>" method="POST">
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
                                                <th class="text-center">Tanggal Pengisian</th>
                                                <th class="text-center">Nomor Polisi</th>
                                                <th class="text-center">Jumlah Isi</th>
                                                <th class="text-center">Jenis BBM</th>
                                                <th class="text-center">Total Bayar</th>
                                            <?php if ($_SESSION['hak_akses'] == 'ESR' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                <th class="text-center" colspan="3">ACTION</th>
                                            <?php } ?>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($bbm as $pgw) : ?>
                                                <tr>
                                                    <td><?php echo ++$start ?>.</td>
                                                    <td><?php echo $pgw['tanggal'] ?></td>
                                                    <td><?php echo $pgw['no_pol'] ?></td>
                                                    <td><?php echo $pgw['jumlah_liter'] ?> Liter</td>
                                                    <td>
                                                        <?php
                                                            if ($pgw['jenis_bbm'] == "10000") {
                                                                echo "<h5><span class='badge bg-secondary'>Pertalite</span></h5>";
                                                            }elseif ($pgw['jenis_bbm'] == "13050") {
                                                                echo "<h5><span class='badge bg-primary'>Pertamax</span></h5>";
                                                            }else{
                                                                echo "<h5><span class='badge bg-success'>Dexlite</span></h5>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>Rp. <?php echo $pgw['jenis_bbm'] * $pgw['jumlah_liter'] ?>,-</td>
                                                    <?php if ($_SESSION['hak_akses'] == 'ESR' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                        <!-- <td><?php echo anchor('bbm/detail/'.$pgw['id'], '<div class="btn btn-success btn-sm"><i class="bi bi-eye-fill"></i></div>') ?></td> -->
                                                        <td><?php echo anchor('bbm/edit/'.$pgw['id'], '<div class="btn btn-primary btn-sm"><i class="bi bi-pencil-fill"></i></div>') ?></td>
                                                        <td onclick="javascript: return confirm('Anda Yakin Untuk Meng - HAPUS Data Ini ?')"><?php echo anchor('bbm/hapus/'.$pgw['id'], '<div class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></div>') ?></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        
                                        <?php if (empty($bbm)) : ?>
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
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Input Pengunaan BBM</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('bbm/tambah_aksi') ; ?>
                                <div class="form-group">
                                    <label>Tanggal Pengisian BBM</label>
                                    <input type="date" name="tanggal" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Nama Karyawan</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Nomor Polisi Kendaraan</label>
                                    <input type="text" name="no_pol" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Jumlah Liter</label>
                                    <input type="number" name="jumlah_liter" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Jenis Bahan Bakar Minyak (BBM)</label>
                                    <select name="jenis_bbm" class="form-control">
                                        <option value="10000">Pertalite</option>
                                        <option value="13050">Pertamax</option>
                                        <option value="16500">Dexlite</option>
                                    </select>
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
