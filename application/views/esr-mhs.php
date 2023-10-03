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
                                                <th class="text-center">Nama Mahasiswa</th>
                                                <th class="text-center">Asal Kampus</th>
                                                <th class="text-center">Jurusan / Prodi</th>
                                                <th class="text-center">Masuk</th>
                                                <?php if ($_SESSION['hak_akses'] == 'ESR' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                    <th class="text-center">No Telp</th>
                                                <?php } ?>
                                                <th class="text-center">Keluar</th>
                                                <th class="text-center" colspan="3">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($karyawan as $kry) : ?>
                                                <tr>
                                                    <td><?php echo ++$start ?></td>
                                                    <td><?php echo $kry['nama_mhs'] ?></td>
                                                    <td><?php echo $kry['asal_kampus'] ?></td>
                                                    <td><?php echo $kry['jurusan'] ?></td>
                                                    <td><?php echo $kry['masuk_pkl'] ?></td>
                                                    <td><?php echo $kry['keluar_pkl'] ?></td>
                                                    <?php if ($_SESSION['hak_akses'] == 'ESR' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                        <td><?php echo $kry['no_telp'] ?></td>
                                                    <?php } ?>
                                                        <td><?php echo anchor('karyawan/detail_mahasiswa/'.$kry['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                                                    <?php if ($_SESSION['hak_akses'] == 'ESR' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                        <td><?php echo anchor('karyawan/edit_mahasiswa/'.$kry['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
                                    <label>Nama Mahasiswa</label>
                                    <input type="text" name="nama_mhs" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Asal Kampus</label>
                                    <input type="text" name="asal_kampus" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Masuk PKL</label>
                                    <input type="date" name="masuk_pkl" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Keluar PKL</label>
                                    <input type="date" name="keluar_pkl" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Nomor Telphone ( HP )</label>
                                    <input type="text" name="no_telp" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Alamat Mahasiswa</label>
                                    <input type="text" name="alamat" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>E-mail Mahasiswa</label>
                                    <input type="text" name="email" class="form-control">
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
