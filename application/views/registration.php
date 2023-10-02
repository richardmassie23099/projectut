<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | E-Ewako</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/main/app.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/assets/images/logo/UT.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/assets/images/logo/UT.png" type="image/png">
</head>

<body>
    <div id="auth">
        
<div class="row h-100 text-center">
    <div class="col-lg-12 col-12">
        <div id="auth-left">
            <h1 class="auth-title">Sign Up.</h1>
            <!-- <p class="auth-subtitle mb-5">Input Your Data.</p> -->

            <form action="<?php echo site_url() ?>/registration/tambah_aksi" method="post">
                <div class="form-group position-relative has-icon-left mb-4">
                    <!-- <input type="text" class="form-control form-control-xl" placeholder="Email"> -->
                    <input type="text" name="nama_lengkap" class="form-control form-control-xl" placeholder="Input Nama Lengkap. . ." autofocus autocomplete="off">
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <!-- <input type="text" class="form-control form-control-xl" placeholder="Username"> -->
                    <input type="username" name="username" class="form-control form-control-xl" placeholder="Input Username. . ." autocomplete="off">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <!-- <input type="password" class="form-control form-control-xl" placeholder="Password"> -->
                    <input type="password" name="password" class="form-control form-control-xl" placeholder="Input Password. . .">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <ul class="list-unstyled mb-0">
                    <li class="d-inline-block me-2 mb-1">
                        <div class="form-check">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="form-check-input form-check-primary form-check-glow"
                                    name="hak_akses" value="P" id="customColorCheck1">
                                <label class="form-check-label" for="customColorCheck1"><h5>Saya Setuju</h5></label>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="form-group position-relative has-icon-left">
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                </div>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class='text-gray-600'>Already have an account? <a href="<?php echo site_url() ?>login/index" class="font-bold"><br>Log
                        in</a>.</p>
            </div>
        </div>
    </div>
    <!-- <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div> -->
</div>

    </div>
</body>

</html>
