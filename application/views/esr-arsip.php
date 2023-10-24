            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-first">
                            <h3>DATA ARSIP</h3>
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
                                    <a class="btn btn-success btn-sm" href="<?php echo base_url('arsip/print_arsip') ?>" role="button">
                                        <i class="bi bi-printer"></i> Print Laporan
                                    </a>
                                <?php } ?>
                                <br><br>
                                    
                                <!-- <div class="row">
                                    <div class="col-md">
                                        <form action="<?php echo base_url('arsip/index') ; ?>" method="POST">
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
                                                <th class="text-center">NO DOKUMEN</th>
                                                <th class="text-center">JENIS DOKUMEN</th>
                                                <th class="text-center">TANGGAL DOKUMEN</th>
                                                <th class="text-center">CABANG</th>
                                                <th class="text-center">KEPADA</th>
                                                <th class="text-center">KONDISI</th>
                                                <th colspan="3" class="text-center">Action</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($arsip as $kry) : ?>
                                                <tr>
                                                    <td><?php echo ++$start ?></td>
                                                    <td><?php echo $kry['no_dokumen'] ?></td>
                                                    <td><?php echo $kry['jenis_dokumen'] ?></td>
                                                    <td><?php echo $kry['tanggal_dokumen'] ?></td>
                                                    <td><?php echo $kry['cabang'] ?></td>
                                                    <td><?php echo $kry['kepada'] ?></td>
                                                    <!-- <td><?php echo $kry['kondisi'] ?></td> -->
                                                    <td><span class="btn btn-primary btn-sm">DIPINJAM</div></td>
                                                        <td><?php echo anchor('arsip/detail_arsip/'.$kry['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                                                    <?php if ($_SESSION['hak_akses'] == 'ESR' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                        <td><?php echo anchor('arsip/edit_arsip/'.$kry['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                                        <td onclick="javascript: return confirm('Anda Yakin Untuk Meng - HAPUS Data Ini ?')"><?php echo anchor('arsip/hapus/'.$kry['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        
                                        <?php if (empty($arsip)) : ?>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Input Data Arsip</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('arsip/tambah_aksi') ; ?>
                                <div class="form-group">
                                    <label>No Dokumen</label>
                                    <input type="number" name="no_dokumen" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Jenis Dokumen</label>
                                    <input type="text" name="jenis_dokumen" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Dokumen</label>
                                    <input type="date" name="tanggal_dokumen" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Cabang</label>
                                    <input type="text" name="cabang" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" name="status" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Type</label>
                                    <input type="text" name="type" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Kepada</label>
                                    <input type="text" name="kepada" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Keperluan</label>
                                    <input type="text" name="keperluan" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Lokasi Arsip</label>
                                    <input type="text" name="lokasi_arsip" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>keterangan</label>
                                    <input type="text" name="keterangan" class="form-control">
                                    <select class="form-select" name="keterangan" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">dipinjam</option>
                                        <option value="2">tersedia</option>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label>tanggal_keluar_masuk</label>
                                    <input type="date" name="tanggal_keluar_masuk" class="form-control">
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
