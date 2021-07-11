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
							<li><span class="current_crumb">Ubah Profile</span></li>
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
                            <h1 class="h3 text-white font-w700 mb-10"><?php echo $this->session->userdata('nama_user'); ?></h1>
                            <h2 class="h5 text-white-op">
                                <!-- Taman Baca Anak -->
                            </h2>
                            <!-- END Personal -->

                        </div>
                    </div>
                </div>
                <!-- END User Info -->

                <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content content-full">

                    <!-- Dummy content -->
                    <div class="row">
									</div>

							<!-- Main Container -->
							<main id="main-container">
								<div class="row">
								<div class="col-md-3"></div>	
								<div class="col-md-6">
											<div class="block block-themed block-rounded">
													<div class="block-header bg-gd-sea">
															<h3 class="block-title"><strong>Ubah Profile</strong></h3>
													</div>
								<form class="checkout woocommerce-checkout" method="POST"  action="<?php echo base_url('akun/save_profile') ?>" enctype="multipart/form-data">
								<div class="block-content block-content-full">
									<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="billing_company" class="">Nama</label>
										<div class="col-lg-8">
											<input type="hidden" class="form-control" name="id_user" id="id_user" value="<?= $akun->id ?>" >
												<input type="text" class="form-control" name="nama" id="judul" placeholder="Nama" value="<?= $akun->nama ?>" >
										</div>
									</div>
									<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="billing_company" class="">Email</label>
										<div class="col-lg-8">
												<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= $akun->email ?>" >
										</div>
									</div>
									<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="billing_company" class="">No. HP / Telp</label>
										<div class="col-lg-8">
												<input type="text" class="form-control" name="telp" id="telp" placeholder="No. HP" value="<?= $akun->telp ?>" >
										</div>
									</div>
									<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="billing_company" class="">Alamat</label>
										<div class="col-lg-8">
												<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?= $akun->alamat ?>" >
										</div>
									</div>
									<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="billing_company" class="">Tempat Lahir</label>
										<div class="col-lg-8">
												<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?= $akun->tempat_lahir ?>" >
										</div>
									</div>
									<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="billing_company" class="">Tanggal Lahir</label>
										<div class="col-lg-8">
												<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="tanggal_lahir" value="<?= $akun->tanggal_lahir ?>" >
										</div>
									</div>
									<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="billing_company" class="">Jenis Kelamin</label>
										<div class="col-lg-8">
												<select type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin">
													<option value="<?= ($akun->jenis_kelamin == "Laki-laki") ? 'Laki-laki' : 'Perempuan'; ?>"><?= $akun->jenis_kelamin ?></option>
													<option value="<?= ($akun->jenis_kelamin == "Laki-laki") ? 'Perempuan' : 'Laki-laki'; ?>"><?= ($akun->jenis_kelamin == "Laki-laki") ? 'Perempuan' : 'Laki-laki'; ?></option>
												</select>
										</div>
									</div>
									<!-- <div class="form-group row">
												<label class="col-lg-4 col-form-label" for="billing_company" class="">Unggah Gambar</label>
										<div class="col-lg-8">
												<input type="file" class="custom-file" id="gambar" name="gambar" required>
										</div>
									</div> -->
								<div class="form-group row">
										<div class="col-lg-4 ml-auto">
											 <button style="display: none" type="reset" value"cancel" class="btn btn-alt-primary">Cancel</button>
											 <button style="float: right;" type="submit" name="submit" class="btn btn-alt-primary">Submit</button>
										</div>
								</div>
								<br>
							</div>
						</form>
														</div>
													<!-- END Page Content -->
												</div>


											</div>
											</main>
											<!-- END Main Container -->										


                    </div>
                    <!-- END Dummy content -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->


	<?php $this->load->view('user/v_footer_bottom') ?>
	</body>
</html>