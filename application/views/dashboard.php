    <div class="page-content">
        <section class="row">
            <!-- <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="bar"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo base_url() ?>assets/assets/images/samples/ImgUT1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url() ?>assets/assets/images/samples/ImgUT2.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url() ?>assets/assets/images/samples/ImgUT3.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url() ?>assets/assets/images/samples/ImgUT4.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-4 col-md-6">
                <div class="card">
                    <a href="<?php echo base_url() ?>karyawan/index">
                    <div class="card-body px-1 py-1-1">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
                                <img src="<?php echo base_url() ?>assets/assets/images/icon/logo-adm.png" width="70px">
                                <h5 class="font-extrabold  mt-2">DATA KARYAWAN</h5>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            <?php if ($_SESSION['hak_akses'] == 'ASSET'  or $_SESSION['hak_akses'] == 'A') { ?>
            <div class="col-6 col-lg-4 col-md-6">
                <div class="card">
                    <a href="<?php echo base_url() ?>asset/index">
                    <div class="card-body px-1 py-1-1">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
                                <img src="<?php echo base_url() ?>assets/assets/images/icon/logo-svc.png" width="70px">
                                <h5 class="font-extrabold  mt-2">DATA ASSET</h5>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>                            
            <?php } ?>

            <?php if ($_SESSION['hak_akses'] == 'ARSIP'  or $_SESSION['hak_akses'] == 'A') { ?>
            <div class="col-6 col-lg-4 col-md-6">
                <div class="card">
                    <a href="<?php echo base_url() ?>arsip/index">
                    <div class="card-body px-1 py-1-1">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
                                <img src="<?php echo base_url() ?>assets/assets/images/icon/logo-parts.png" width="70px">
                                <h5 class="font-extrabold  mt-2">DATA ARSIP</h5>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <?php } ?>

            <!-- <div class="col-6 col-lg-4 col-md-6">
                <div class="card">
                    <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                    <div class="card-body px-1 py-1-1">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
                                <img src="<?php echo base_url() ?>assets/assets/images/icon/menu.png" width="70px">
                                <h5 class="font-extrabold  mt-2">Lainnya</h5>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            <!-- Vertically Centered modal Modal 
            <div class="modal fade modal-borderless" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Lainnya</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                
                                <div class="col-6 col-lg-4 col-md-6">
                                    <div class="card">
                                        <a href="#">
                                        <div class="card-body px-1 py-1-1">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
                                                    <div class="avatar avatar-xl avatar-center">
                                                        <img src="<?php echo base_url() ?>assets/assets/images/icon/indonesia.png">
                                                    </div>
                                                    <h6 class="font-extrabold  mt-2">New Tools</h6>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </section>
    </div>