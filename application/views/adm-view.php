            <div class=" clearfix mb-0 text-muted">
                <div class="float-start">
                    <h3> ADMINISTRATION </h3>
                </div>
            </div><hr>

            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <!-- <div class="col-12 col-lg-12 col-md-6">
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
                            </div> -->

                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <a href="<?php echo base_url() ?>adm/dashesr">
                                    <div class="card-body px-1 py-1-1">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
                                                <img src="<?php echo base_url() ?>assets/assets/images/icon/adm-esr.png" width="70px">
                                                <h5 class="font-extrabold  mt-2">ESR</h5>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>

                            <?php if ($_SESSION['hak_akses'] == 'ADH' or $_SESSION['hak_akses'] == 'A') { ?>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <a href="<?php echo base_url() ?>adm/dashadh">
                                    <div class="card-body px-1 py-1-1">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
                                                <img src="<?php echo base_url() ?>assets/assets/images/icon/adm-adh.png" width="70px">
                                                <h5 class="font-extrabold  mt-2">ADH</h5>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if ($_SESSION['hak_akses'] == 'GA' or $_SESSION['hak_akses'] == 'A') { ?>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <a href="<?php echo base_url() ?>adm/dashga">
                                    <div class="card-body px-1 py-1-1">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
                                                <img src="<?php echo base_url() ?>assets/assets/images/icon/adm-ga.png" width="70px">
                                                <h5 class="font-extrabold  mt-2">GA</h5>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <a href="<?php echo base_url() ?>adm/dashkasir">
                                    <div class="card-body px-1 py-1-1">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
                                                <img src="<?php echo base_url() ?>assets/assets/images/icon/adm-kasir.png" width="70px">
                                                <h5 class="font-extrabold  mt-2">KASIR</h5>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>

                            <?php if ($_SESSION['hak_akses'] == 'PST'  or $_SESSION['hak_akses'] == 'A') { ?>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <a href="<?php echo base_url() ?>adm/dashpst">
                                    <div class="card-body px-1 py-1-1">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
                                                <img src="<?php echo base_url() ?>assets/assets/images/icon/adm-pst.png" width="70px">
                                                <h5 class="font-extrabold  mt-2">PST</h5>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if ($_SESSION['hak_akses'] == 'AR' or $_SESSION['hak_akses'] == 'A') { ?>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <a href="#">
                                    <div class="card-body px-1 py-1-1">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
                                                <img src="<?php echo base_url() ?>assets/assets/images/icon/adm-ar.png" width="70px">
                                                <h5 class="font-extrabold mt-2">AR</h5>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <a href="http://sigaputmakassar.great-site.net/">
                                    <div class="card-body px-1 py-1-1">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
                                                <img src="<?php echo base_url() ?>assets/assets/images/icon/adm-sigap.png" width="70px">
                                                <h5 class="font-extrabold  mt-2">SIGAP</h5>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <a href="#">
                                    <div class="card-body px-1 py-1-1">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">                                                
                                                <img src="<?php echo base_url() ?>assets/assets/images/icon/indonesia.png" width="70px">
                                                <h5 class="font-extrabold  mt-2">HC</h5>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-header text-center">
                                <h3 class="font-extrabold">ADM Contact</h3>
                            </div>
                            <div class="card-content pb-4">
                                <div class="recent-message d-flex px-1 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="<?php echo base_url() ?>assets/assets/images/faces/4.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">ADH</h5>
                                        <h6 class="text-muted mb-0">012345678910</h6>
                                    </div>
                                </div>

                                <div class="recent-message d-flex px-1 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="<?php echo base_url() ?>assets/assets/images/faces/1.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">KASIR</h5>
                                        <h6 class="text-muted mb-0">012345678910</h6>
                                    </div>
                                </div>

                                <div class="recent-message d-flex px-1 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="<?php echo base_url() ?>assets/assets/images/faces/2.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">GA</h5>
                                        <h6 class="text-muted mb-0">012345678910</h6>
                                    </div>
                                </div>

                                <div class="recent-message d-flex px-1 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="<?php echo base_url() ?>assets/assets/images/faces/3.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">ADMIN</h5>
                                        <h6 class="text-muted mb-0">012345678910</h6>
                                    </div>
                                </div>

                                <div class="recent-message d-flex px-1 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="<?php echo base_url() ?>assets/assets/images/faces/5.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">ADMIN 1</h5>
                                        <h6 class="text-muted mb-0">087771220505</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>