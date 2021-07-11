<?php $this->load->view('user/v_header') ?>
<?php $this->load->view('user/v_menu') ?>

<div id="kids_middle_container">
			<!-- .content -->
			<div class="kids_top_content">
				<div class="kids_top_content_middle ">
					<div class="header_container ">
						<div class="l-page-width">
							<h1>Acara</h1>
							<ul id="breadcrumbs">
								<li><a href="index.php" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
								<li><span class="current_crumb">Acara</span></li>
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
										<div class="portfolio iso-column iso-two-column">
											<div class="grid isotope" data-ppp="4" data-cols="251">
												<?php foreach ($acara->result() as $key): ?>
													<div data-categories="wide " class="iso-item">
													<div class="content-wrapper">
														<figure>
															<a title="Project 14" class="prettyPhoto kids_picture" data-rel="prettyPhoto[portfolio]" href="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>"><img src='<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>'style="width: 550px" alt='' /></a>
														</figure>
													</div>
													<!--/ content-wrapper-->
													<div class="gallery-text">
														<div class="title"><a class="link" href="<?php echo base_url('index/detail_acara/'.$key->id) ?>"><?php echo $key->judul ?></a></div>
														<?php echo substr($key->isi, 0,250) ?>
													</div>
													<div class="post-footer">
														<a href="<?php echo base_url('index/detail_acara/'.$key->id) ?>" class="cws_button">Read More</a>
													</div>
													<!--/ post-footer-->
													<div class="kids_clear"></div>
												</div>
												<?php endforeach ?>
											</div>
											<!-- grid isotope -->
										</div>
										<!-- .gl_col_ -->
										<!-- comments block -->
										<!-- //end comments block -->
									</main>
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