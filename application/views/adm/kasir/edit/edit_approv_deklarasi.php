<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approval Deklarasi Karyawan | KASIR</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/main/app.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/assets/images/logo/UT.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/assets/images/logo/UT.png" type="image/png">
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="<?php echo base_url('deklarasi/index') ?>"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-4" href="#">
                <img src="<?php echo base_url() ?>assets/assets/images/logo/logo.svg">
            </a>
            <div class="float-end">
                <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                    <div class="form-check form-switch fs-6">
                        <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                        <label class="form-check-label" ></label>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
                </div>
            </div>
        </div>
        
    </nav>
    
    <div class="container">
            <div class="row">
                <div class="col-12">
        <br><center>
            <h2><strong>APPROVAL DEKLARASI KARYAWAN</strong></h2>
        <br></center>
        <?php foreach ($deklarasi as $dkl)  { ?>
            <form action="<?php echo base_url().'deklarasi/update' ; ?>" method="post">
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput">Tanggal</label>
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $dkl->id ?>">
                                    <input type="date" name="tanggal" value="<?php echo $dkl->tanggal ?>"  class="form-control" 
                                        readonly>
                                    <!-- <input type="text" class="form-control" id="basicInput" placeholder="Enter email"> -->
                                </div>

                                <div class="form-group">
                                    <label for="helpInputTop">Keperluan</label>
                                    <small class="text-muted">eg.<i>someone@example.com</i></small>
                                    <!-- <input type="text" class="form-control" id="helpInputTop"> -->
                                    <input type="text" name="keperluan" value="<?php echo $dkl->keperluan ?>" class="form-control"
                                        readonly>
                                </div>

                                <div class="form-group">
                                    <label for="helperText">Amount</label>
                                    <input type="text" name="amount" value="<?php echo $dkl->amount ?>" class="form-control"
                                        readonly>
                                    <!-- <input type="text" id="helperText" class="form-control" placeholder="Name"> -->
                                    <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                                </div>

                                <div class="form-group">
                                    <label for="helpInputTop">Keterangan</label>
                                    <small class="text-muted">eg.<i>someone@example.com</i></small>
                                    <input type="text" name="keterangan" value="<?php echo $dkl->keterangan ?>" class="form-control"
                                        readonly>
                                    <!-- <input type="text" class="form-control" id="helpInputTop"> -->
                                </div>

                                <div class="form-group">
                                    <label for="helperText">NRP</label>
                                    <input type="text" name="nrp" value="<?php echo $dkl->nrp ?>" class="form-control"
                                        readonly>
                                    <!-- <input type="text" id="helperText" class="form-control" placeholder="Name"> -->
                                    <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="disabledInput">Tanggal Deklarasi</label>
                                    <input type="text" name="tanggal_deklarasi" value="<?php echo $dkl->tanggal_deklarasi ?>" class="form-control" readonly>
                                    <!-- <input type="text" class="form-control" id="disabledInput" placeholder="Disabled Text"> -->
                                </div>

                                <div class="form-group">
                                    <label for="disabledInput">Uang Muka</label>
                                    <input type="text" name="uang_muka" value="<?php echo $dkl->uang_muka ?>" class="form-control" readonly>
                                    <!-- <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="You can't update me :P"> -->
                                </div>

                                <div class="form-group">
                                    <label for="disabledInput">Jumlah Pengeluaran Actual</label>
                                    <input type="text" name="jum_keluar_act" value="<?php echo $dkl->jum_keluar_act ?>" class="form-control" readonly>
                                    <!-- <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="You can't update me :P"> -->
                                </div>

                                <div class="form-group">
                                    <label for="disabledInput">Kembali ke <?php echo $dkl->kembali_ke ?></label>
                                    <input type="hidden" name="kembali_ke" value="<?php echo $dkl->kembali_ke ?>" class="form-control" readonly>
                                    <input type="text" name="kembalian" value="<?php echo $dkl->kembalian ?>" class="form-control" readonly>
                                    <!-- <input type="text" class="form-control" id="disabledInput" placeholder="Disabled Text" readonly> -->
                                </div>

                                <div class="form-group">
                                    <label for="disabledInput">Lokasi</label>
                                    <input type="text" name="lokasi" value="<?php echo $dkl->lokasi ?>" class="form-control" readonly>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <center>
                <button type="submit" class="btn btn-success btn-sm">SUBMIT</button>
                <!-- <a href="<?php echo base_url('deklarasi/index') ?>" class="btn btn-sm btn-warning text-black">KEMBALI</i></a> -->
            </center><br>

        <?php if ($_SESSION['hak_akses'] == 'A' or $_SESSION['hak_akses'] == 'ADH' ) { ?>
            <div class="form-group row">
                <label class="col-sm-12 col-form-label">Approval ADH</label>
                <div class="col-sm-12">
                    <select name="approval_1" class="form-control">
                        <option>- Silahkan Pilih -</option>
                        <option value="Setuju"<?php echo ($dkl->approval_1 == "Setuju")? "selected=\"on\"" : "" ?>>Setuju</option>
                        <option value="Tolak"<?php echo ($dkl->approval_1 == "Tolak")? "selected=\"on\"" : "" ?>>Tolak</option>
                    </select>
                </div>
            </div>
        <?php } ?>

        <?php if ($_SESSION['hak_akses'] == 'A' or $_SESSION['hak_akses'] == 'GA' ) { ?>
            <div class="form-group row">
                <label class="col-sm-12 col-form-label">Approval GA</label>
                <div class="col-sm-12">
                    <select name="approval_2" class="form-control">
                        <option>- Silahkan Pilih -</option>
                        <option value="Setuju"<?php echo ($dkl->approval_2 == "Setuju")? "selected=\"on\"" : "" ?>>Setuju</option>
                        <option value="Tolak"<?php echo ($dkl->approval_2 == "Tolak")? "selected=\"on\"" : "" ?>>Tolak</option>
                    </select>
                </div>
            </div>
        <?php } ?>

        <?php if ($_SESSION['hak_akses'] == 'A' or $_SESSION['hak_akses'] == 'KASIR' ) { ?>
            <div class="form-group row">
                <label class="col-sm-12 col-form-label">Approval KASIR</label>
                <div class="col-sm-12">
                    <select name="approval_3" class="form-control">
                        <option>- Silahkan Pilih -</option>
                        <option value="Setuju"<?php echo ($dkl->approval_3 == "Setuju")? "selected=\"on\"" : "" ?>>Setuju</option>
                        <option value="Tolak"<?php echo ($dkl->approval_3 == "Tolak")? "selected=\"on\"" : "" ?>>Tolak</option>
                    </select>
                </div>
            </div>
        <?php } ?>

            </form><br><br>
        <?php } ?>
        </div>
    </div>

    <script src="<?php echo base_url() ?>assets/assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/js/app.js"></script>
</body>

</html>
