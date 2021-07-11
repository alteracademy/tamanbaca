<?php $this->load->view('user/v_header') ?>
<?php $this->load->view('user/v_menu') ?>
		<!-- HEADER END -->
		<div id="kids_middle_container">
			<!-- .content -->
			<div class="kids_top_content">
				<div class="kids_top_content_middle ">
					<div class="header_container ">
						<div class="l-page-width">
							<h1>Contact</h1>
							<ul id="breadcrumbs">
								<li><a href="index.php" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
								<li><span class="current_crumb">Contact</span></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- .kids_top_content_middle -->
			</div>
			<div class="bg-level-2-full-width-container kids_bottom_content">
				<div class="bg-level-2-page-width-container no-padding">
					<section class="kids_bottom_content_container">
						<!-- ***************** - START Image floating - *************** -->
						<div class="page-content">
							<div class="bg-level-2 first-part"></div>
							<div class="container l-page-width">
								<div class="entry-container ">
									<main>
										<div class='grid-row clearfix'>
											<div class='grid-col grid-col-12'>
												<section class='cws-widget'>
													<div class='widget-title'>Lokasi Kami</div>
													<section class='cws_widget_content'>
														<!-- map -->
														<div class="map-container">
															<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.318873795999!2d106.84216301431412!3d-6.352748895402859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec4702a57e6f%3A0xabb9412b55570bb1!2sgriya+pasadena!5e0!3m2!1sid!2sid!4v1530185444342" width="1150" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
														</div>
														<!--/ map -->
													</section>
												</section>
											</div>
										</div>
										<div class='grid-row clearfix'>
											<div class='grid-col grid-col-9'>
												<section class='cws-widget'>
													<div class='widget-title'>Tentang Kami</div>
													<section class='cws_widget_content'>
														<p>Kami adalah Komunitas Taman Baca Anak yang ingin memberikan edukasi, ketertarikan minat membaca anak-anak, dan memberikan peluang
                               terhadap anak-anak untuk mempublikasikan hasil karyanya yang sudah mereka buat untuk di lihat dan di baca oleh masyarakat luas.
														</p>
														<div class='widget-title'>Kritik & Saran</div>
															<div role="form" class="wpcf7" id="wpcf7-f622-p199-o1" lang="en-US" dir="ltr">
																<div class="screen-reader-response"></div>
																<form action="<?php echo base_url('index/saran') ?>" method="post" class="wpcf7-form contact-form">
																	<p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="nama" value="" size="49" placeholder="Nama" required/></span> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="49" placeholder="E-mail" required /></span><span class="wpcf7-form-control-wrap your-message"><textarea name="isi" cols="103" rows="8" placeholder="Pesan" required></textarea></span>
																		<input type="submit" value="Kirim" class="wpcf7-form-control wpcf7-submit" />
																	</p>
																</form>
														</div>
													</section>
												</section>
											</div>
											<div class='grid-col grid-col-3'>
												<section class='cws-widget'>
													<div class='widget-title'>Kontak Kami</div>
													<section class='cws_widget_content'>
														<p>Pusat Informasi</p>
														<p><strong>Phone: +62 812 8520 4401</strong></p>
														<p><strong>Email: <a class="link" href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="blank">taman.bacanak@gmail.com</a></strong></p>
													</section>
												</section>
											</div>
										</div>
										<!-- comments block -->
										<!-- //end comments block -->
									</main>
									<div class="kids_clear"></div>
								</div>
								<!-- .entry-container -->
							</div>
							<div class="bg-level-2 second-part"></div>
						</div>
						<!-- ***************** - END Image floating - *************** -->
					</section>
					<!-- .bottom_content_container -->
				</div>
				<div class="content_bottom_bg"></div>
			</div>
		</div>
		<!-- .end_content -->
		<?php $this->load->view('user/v_footer_bottom') ?>
	</body>
</html>