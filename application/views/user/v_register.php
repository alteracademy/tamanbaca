<?php $this->load->view('user/v_header') ?>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<?php $this->load->view('user/v_menu') ?>

<div id="page-container" class="main-content-boxed">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-body-dark bg-pattern" style="background-image: url('images/pattern_owl.png');">
                    <div class="row mx-0 justify-content-center">
                        <div class="hero-static col-lg-6 col-xl-4">
                            <div class="content content-full overflow-hidden">
                                <!-- Header -->
                                <div class="py-30 text-center">
                                  <a class="font-w700 mr-5">
                                      <img src="images/taman.png" alt="Universitas Gunadarma" width="350">
                                  </a>
                                    </a>
                                    <h1 class="h4 font-w700 mt-30 mb-10">Buat Akun Baru</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0"></h2>
                                </div>
                                <!-- END Header -->

                                <!-- Sign Up Form -->
                                <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.js) -->
                                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-signup" action="<?php echo base_url('login/saveregistrasi') ?>" method="post">
                                    <div class="block block-themed block-rounded block-shadow">
                                        <div class="block-header bg-gd-sea">
                                            <h3 class="block-title">Silahkan Masukkan Data Anda</h3>
                                        </div>
                                        <div class="block-content">
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="signup-username">Nama Pengguna</label>
                                                    <input type="text" class="form-control" id="signup-name" name="nama" placeholder="nama pengguna">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="signup-email">Email</label>
                                                    <input type="email" class="form-control" id="signup-email" name="email" placeholder="email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="signup-password">Kata Sandi</label>
                                                    <input type="password" class="form-control" id="signup-password" name="signup-password" placeholder="********">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="signup-password-confirm">Konfirmasi Kata Sandi</label>
                                                    <input type="password" class="form-control" id="signup-password-confirm" name="signup-password-confirm" placeholder="********">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-6 push">
                                                    <div class="custom-control custom-checkbox" style="display: none">
                                                        <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                                        <label class="custom-control-label" for="signup-terms">Saya menyetujui Persyaratan & Ketentuan</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-sm-right push">
                                                    <button type="submit" class="btn btn-alt-success">
                                                        <i class="fa fa-plus mr-10"></i> Buat Akun
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-content bg-body-light">
                                            <div class="form-group text-center">
                                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="<?php echo base_url('login') ?>">
                                                    <i class="fa fa-user text-muted mr-5"></i> Masuk
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Sign Up Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
        <?php $this->load->view('user/v_footer_bottom') ?>
    </body>
</html>