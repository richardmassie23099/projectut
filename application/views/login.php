<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | E-Ewako</title>
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
                    <h1 class="auth-title">Login.</h1>
                    <p class="auth-subtitle mb-5">Login with your Username & Password.</p>

                    <form action="<?php echo site_url() ?>/login/validasi" method="post">
                        <?php echo $this->session->flashdata('message'); ?>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Masukkan Username. . ." name="username" autofocus autocomplete="off">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Masukkan Password. . ." name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-1">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="<?php echo site_url() ?>registration/index" class="font-bold"><br>Sign up</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
