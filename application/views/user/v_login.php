<!doctype html>
<base href="<?php echo base_url('assets/user') ?>/">
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Taman Baca Anak: Login to the site</title>

        <meta name="description" content="Taman Baca Anak">
        <meta name="author" content="Taman Baca Anak">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Taman Baca Anak">
        <meta property="og:site_name" content="Taman Baca Anak">
        <meta property="og:description" content="Taman Baca Anak">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="images/favicon2.png">
        <link rel="icon" type="image/png" sizes="192x192" href="images/favicon2.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon2.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <div id="page-container" class="main-content-boxed">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-body-dark bg-pattern" style="background-image: url('images/pattern_balloons@2x.png');">
                    <div class="row mx-0 justify-content-center">
                        <div class="hero-static col-lg-6 col-xl-4">
                            <div class="content content-full overflow-hidden">
                                <!-- Header -->
                                <div class="py-30 text-center">
                                  <a class="font-w700 mr-5">
                                      <img src="images/taman.png" alt="Universitas Gunadarma" width="350">
                                  </a>
                                    <h1 class="h4 font-w700 mt-30 mb-10">Selamat Datang</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">Membaca Sambil Bermain</h2>
                                </div>
                                <!-- END Header -->

                                <!-- Sign In Form -->
                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.js) -->
                                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                         
                                <form class="js-validation-signin" action="" method="post">
                                    <div class="block block-themed block-rounded block-shadow">
                                        <div class="block-header bg-gd-sea">
                                            <h3 class="block-title">Masukkan Akun Anda</h3>
                                        </div>
                                        <div class="block-content">
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="login-username">Email</label>
                                                    <input type="text" class="form-control" id="login-email" name="email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="login-password">Kata Sandi</label>
                                                    <input type="password" class="form-control" id="login-password" name="password">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-6 d-sm-flex align-items-center push" style="display: none">
                                                    <div class="custom-control custom-checkbox mr-auto ml-0 mb-0" style="display: none">
                                                        <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                                        <label class="custom-control-label" for="login-remember-me">Ingatkan saya</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-sm-right push">
                                                    <button type="submit" name="login" class="btn btn-alt-primary">
                                                        <i class="si si-login mr-10"></i> Masuk
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-content bg-body-light">
                                            <div class="form-group text-center">
                                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="<?php echo base_url('login/registrasi') ?>">
                                                    <i class="fa fa-plus mr-5"></i> Buat Akun
                                                </a>
                                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="lupa_password.php" style="display: none">
                                                    <i class="fa fa-warning mr-5"></i> Lupa Password
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
        <!-- Codebase Core JS -->
        <script src="js/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.bundle.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/op_auth_signin.js"></script>
    </body>
</html>