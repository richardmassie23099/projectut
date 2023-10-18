<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan | E-Ewako Apps</title>
</head>

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
                                    <a class="btn btn-success btn-sm" target="_blank" href="<?php echo base_url('karyawan/print_karyawan') ?>" role="button">
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
                                                <th class="text-center">Nama Karyawan</th>
                                                <th class="text-center">Company</th>
                                                <th class="text-center">Departement</th>
                                                <th class="text-center">Posisi</th>
                                                <th class="text-center">Lokasi</th>
                                                <th class="text-center" colspan="3">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($karyawan as $kry) : ?>
                                                <tr>
                                                    <td><?php echo ++$start ?></td>
                                                    <td><?php echo $kry['nrp'] ?></td>
                                                    <td><?php echo $kry['nama_kry'] ?></td>
                                                    <td><?php echo $kry['company'] ?></td>
                                                    <td><?php echo $kry['departement'] ?></td>
                                                    <td><?php echo $kry['posisi'] ?></td>                                                    
                                                    <td><?php echo $kry['lokasi'] ?></td>
                                                    <td><?php echo anchor('karyawan/detail_karyawan/'.$kry['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                                                        <?php if ($_SESSION['hak_akses'] == 'ESR' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                        <td><?php echo anchor('karyawan/edit_karyawan/'.$kry['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                                            <td onclick="javascript: return confirm('Anda Yakin Untuk Menghapus Data Ini ?')"><?php echo anchor('karyawan/hapus/'.$kry['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                                        <?php } ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        
                                        <?php if (empty($karyawan)) : ?>
                                            <tr>
                                                <td colspan="12">
                                                    <div class="alert alert-primary" role="alert"><center>
                                                        <h4>Data <b>Tidak</b> Ditemukan !! </h4></center>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Input Data Karyawan</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('karyawan/tambah_aksi') ; ?>
                                <div class="form-group">
                                    <label>NRP</label>
                                    <input type="number" name="nrp" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Nama Karyawan</label>
                                    <input style="text transform: capitalize;" type="text" name="nama_kry" class="form-control" placeholder="Nama Lengkap Karyawan">
                                </div>

                                <div class="form-group">
                                    <label>Company</label>
                                    <!-- <input type="text" name="company" class="form-control"> -->
                                    <select class="form-select" name="company" id="company" aria-label="Default select example">
                                        <option disabled selected>Company Karyawan</option>
                                        <option value="UT">UT</option>
                                        <option value="GSI">GSI</option>
                                        <option value="HMU">HMU</option>
                                        <option value="NAJ">NAJ</option>
                                        <option value="MBUT">MBUT</option>
                                        <option value="SIGAP">SIGAP</option>
                                        <option value="KAMAJU">KAMAJU</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Department</label>
                                    <!-- <input type="text" name="departement" class="form-control"> -->
                                    <select class="form-select" name="departement" id="departement" aria-label="Default select example">
                                        <option disabled selected>Department Karyawan</option>
                                        <option value="ADM">ADM</option>
                                        <option value="SVC">SVC</option>
                                        <option value="PRT">PRT</option>
                                        <option value="SOD">SOD-TSO</option>
                                    </select>
                                </div>

                                
                                <div class="form-group">
                                    <label>Posisi</label>
                                    <input type="text" name="posisi" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <!-- <input type="text" name="lokasi" class="form-control"> -->
                                    <select class="form-select" name="lokasi" id="lokasi" aria-label="Default select example">
                                        <option disabled selected>Penempatan Kerja</option>
                                        <option value="Makassar">Makassar</option>
                                        <option value="Kendari">Kendari</option>
                                        <option value="Pomalaa">Pomalaa</option>
                                        <option value="Langgikima">Langgikima</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Tempat lahir</label>
                                    <input style="text transform: capitalize;" type="text" name="tempat_lahir" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Status Pernikahan</label>
                                    <!-- <input type="text" name="status_keluarga" class="form-control"> -->
                                    <select class="form-select" name="status" id="status"aria-label="Default select example">
                                        <option disabled selected>Pilih Status Pernikahan</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Belum Menikah">Belum menikah</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Jumlah Anak</label>
                                    <input type="number" name="jumlah_anak" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal mulai bekerja</label>
                                    <input type="date" name="tgl_bekerja" class="form-control">
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
