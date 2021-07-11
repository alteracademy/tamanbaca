<?php $this->load->view('user/v_header') ?>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<?php $this->load->view('user/v_menu') ?>
	
	<!-- .content -->
		<div class="kids_top_content">
			<div class="kids_top_content_middle ">
				<div class="header_container ">
					<div class="l-page-width">
						<h1>Lihat Akun</h1>
						<ul id="breadcrumbs">
							<li><a href="index.php" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
							<li><span class="current_crumb">Lihat Akun</span></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- .kids_top_content_middle -->
		</div>
            <!-- Main Container -->
            <main id="main-container">
                <!-- User Info -->
                <div class="bg-image " style="background-image: url('images/backgorund.jpg');">
                    <div class="bg-primary-dark-op py-30" style="text-align: center">
                        <div class="content content-full text-center">
                            <!-- Avatar -->
                            <div class="mb-15" style="display: none">
                                <a class="img-link" href="#" style="display: none">
                                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="<?php echo $foto_session; ?>">
                                </a>
                            </div>
                            <!-- END Avatar -->

                            <!-- Personal -->
                            <h1 class="h3 text-white font-w700 mb-10"><?php echo $akun->nama; ?></h1>
                            <h2 class="h5 text-white-op">
                                <!-- Taman Baca Anak -->
                            </h2>
                            <!-- END Personal -->

                        </div>
                    </div>
                </div>
                <!-- END User Info -->

                <!-- Page Content -->
                <div class="content content-full">

                    <!-- Dummy content -->
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="block block-themed block-rounded">
                                <div class="block-header bg-gd-sea">
                                    <h3 class="block-title"><i class="si si-user"></i>&nbsp;&nbsp;Profile&nbsp;&nbsp;<small>Detail</small></h3>
                                </div>
                                <strong><div class="block-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            Nama
                                        </div>
                                        <div class="col-md-3">
                                            : <?php echo $akun->nama; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            Email
                                        </div>
                                        <div class="col-md-5">
    										: <?php echo $akun->email; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            Alamat
                                        </div>
                                        <div class="col-md-5">
                                            : <?php echo $akun->alamat; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            Nomer Telephone
                                        </div>
                                        <div class="col-md-5">
                                            : <?php echo $akun->telp; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            Tempat, tanggal lahir
                                        </div>
                                        <div class="col-md-7">
                                            : <?php echo $akun->tempat_lahir.", ". date('d M Y',strtotime($akun->tanggal_lahir)); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            Jenis Kelamin
                                        </div>
                                        <div class="col-md-5">
                                            : <?php echo $this->session->userdata('jenis_kelamin'); ?>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                </div></strong>
                            </div>
                        </div>
											</div>



                    </div>
                    <!-- END Dummy content -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

	<?php $this->load->view('user/v_footer_bottom') ?>
	</body>
</html>