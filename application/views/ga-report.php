            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-first">
                            <h3>REPORTING AP</h3>
                        </div>
                        <div class="col-12 col-md-12 order-md-2 order-last">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>adm/dashga">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Monitoring AP</li>
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

                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-printer"></i> Print Laporan
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?php echo base_url('report/print_report') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Print Semua Data</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('report/cetak_report') ?>"><i class="bi bi-file-earmark-pdf-fill"></i> Pilihan Lain</a></li>
                                    </ul>
                                </div>
                                <br><br>

                                <!-- <div class="row">
                                    <div class="col-md">
                                        <form action="<?php echo base_url('report/index') ; ?>" method="POST">
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
                                    <table class="table text-center">                            
                                        <thead>
                                            <tr class="table-secondary">
                                                <th class="text-center" style="width: 10px">No.</th>
                                                <th class="text-center">Nama Vendor</th>
                                                <th class="text-center">Due Date</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Payment</th>
                                                <?php if ($_SESSION['hak_akses'] == 'O' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                    <th class="text-center" colspan="3">ACTION</th>
                                                <?php } ?>
                                                </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($report as $rpr) : ?>
                                                <tr>
                                                    <td><?php echo ++$start ?>.</td>
                                                    <td><?php echo $rpr['name_vendor'] ?></td>
                                                    <td><?php echo $rpr['tanggal'] ?></td>
                                                    <td><?php echo $rpr['status'] ?></td>
                                                    <td><?php echo $rpr['payment'] ?></td>
                                                    <td><?php echo anchor('report/detail_report/'.$rpr['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                                                    <?php if ($_SESSION['hak_akses'] == 'O' or $_SESSION['hak_akses'] == 'A' ) { ?>
                                                        <td><?php echo anchor('report/edit_report/'.$rpr['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                                        <td onclick="javascript: return confirm('Anda Yakin Untuk Meng - HAPUS Data Ini ?')"><?php echo anchor('report/hapus/'.$rpr['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        
                                        <?php if (empty($report)) : ?>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Input Monitoring Kondisi report</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('report/tambah_aksi') ; ?>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Nama Vendor</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="name_vendor" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Vendor Account</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="account_vendor" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">No Invoice</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="no_invoice" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Invoice / FP Date</label>
                                    <div class="col-sm-12">
                                        <input type="date" name="date_invoice" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Aging FP</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="aging_fp" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Amount</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="amount" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Text</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Receipt ADM</label>
                                    <div class="col-sm-12">
                                        <input type="date" name="receipt_adm" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Receipt User</label>
                                    <div class="col-sm-12">
                                        <input type="date" name="receipt_user" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Back to ADM</label>
                                    <div class="col-sm-12">
                                        <input type="date" name="back_adm" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Aging</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="aging" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">L/T</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="lt" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Post Date</label>
                                    <div class="col-sm-12">
                                        <input type="date" name="post_date" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">L/T</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="lt_2" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Doc Number</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="doc_num" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Due Date</label>
                                    <div class="col-sm-12">
                                        <input type="date" name="tanggal" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Status</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="status" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Payment</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="payment" class="form-control">
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
