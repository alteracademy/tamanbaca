<?php $this->load->view('user/v_header') ?>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<?php $this->load->view('user/v_menu') ?>


	<!-- .content -->
		<div class="kids_top_content">
			<div class="kids_top_content_middle ">
				<div class="header_container ">
					<div class="l-page-width">
						<h1>Posting</h1>
						<ul id="breadcrumbs">
							<li><a href="index.php" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
							<li><span class="current_crumb">Posting</span></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- .kids_top_content_middle -->
		</div>
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
															<h3 class="block-title"><strong>Posting</strong></h3>
													</div>
								<form class="checkout woocommerce-checkout" method="POST"  action="<?php echo base_url('akun/save_posting') ?>" enctype="multipart/form-data">
								<div class="block-content block-content-full">
									<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="billing_company">Kategori Cerita</label>
										<div class="col-lg-8">
												<input type="hidden" class="form-control" name="id_user" id="id_user" value="<?= $this->session->userdata('id_user') ?>" >
												<select class="form-control" name="kategori" id="kategori">
													<?php foreach ($kategori->result() as $key): ?>
														<option value="<?= $key->id ?>"><?= $key->nama_kategori ?></option>
													<?php endforeach ?>
												</select>
										</div>
									</div>
									<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="billing_company">Judul Cerita</label>
										<div class="col-lg-8">
												<input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Cerita" required="required">
										</div>
									</div>
									<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="billing_company">Cerita</label>
										<div class="col-lg-8">
												<textarea class="input-text" name="isi" id="isi" rows="12" placeholder="Cerita" required="required"></textarea>
										</div>
									</div>
									<div class="form-group row">
												<label class="col-lg-4 col-form-label" for="billing_company">Unggah Gambar</label>
										<div class="col-lg-8">
												<input type="file" class="custom-file" id="file" name="file" required="required">
										</div>
									</div>
								<div class="form-group row">
										<div class="col-lg-4 ml-auto">
												<button type="submit" name="submit" class="btn btn-alt-primary">Submit</button> <button type="reset" value"cancel"="" class="btn btn-alt-primary">Cancel</button>
										</div>
								</div>
								<br>
							</div>
						</form>
														</div>
													<!-- END Page Content -->
									


                    </div>
                    <!-- END Dummy content -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->


	<?php $this->load->view('user/v_footer_bottom') ?>
	</body>
</html>