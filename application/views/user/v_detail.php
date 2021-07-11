<?php $this->load->view('user/v_header') ?>
<?php $this->load->view('user/v_menu') ?>

	<div id="kids_middle_container">
		<!-- .content -->
		<div class="kids_top_content">
			<div class="kids_top_content_middle ">
				<div class="header_container ">
					<div class="l-page-width">
						<h1>Right Navigation</h1>
						<ul id="breadcrumbs">
							<li><a href="index.html" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
							<li><span class="current_crumb">Right Navigation</span></li>
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
						<div class="bg-level-2 first-part" style="width: 47px;"></div>
						<div class="container l-page-width">
							<div class="entry-container single-sidebar">
								<main>
									<div class="grid-row clearfix">
										<div class="grid-col grid-col-12">
											<section class="cws-widget">
												<div class="widget-title"><?php echo $detail->judul ?></div>
												<section class="cws_widget_content">
													<p><img class="alignleft border size-medium" src="<?= base_url('assets/uploads/files/'.$detail->gambar) ?>" alt="Taman Anak"style="width: 300px"></p>
													
													<?php echo $detail->isi ?>
												</section>
											</section>
										</div>
									</div>
									
									<div class="grid-row clearfix">
										<div class="grid-col grid-col-12">
											<section class="cws-widget">
												<section class="cws_widget_content">
													<hr>
												</section>
											</section>
										</div>
									</div>
								</main>
								<aside id="sidebar-right">
									
									
									<div class="widget widget_cws_latest_posts type-2">
										<div class="latest-posts-widget">
											<h3 class="widget-title">Latest Posts</h3>
											<div class="widget-content">
												<ul>
													<?php foreach ($cerita_baru->result() as $key): ?>
														<li>
														<div class="kids_image_wrapper ">
	 														<a href="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>" class="prettyPhoto kids_mini_picture" data-rel="prettyPhoto[rpwt]" rel="prettyPhoto[rpwt]"><img src="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>" width="70" height="70" alt=""><span class="kids_curtain">&nbsp;</span></a>
														</div>
														<div class="kids_post_content">
															<h4><a href="<?php echo base_url('index/detail_cerita/'.$key->id) ?>"><?php echo $key->judul ?></a></h4>
															<p></p>
											
														</div>
													</li>
													<?php endforeach ?>
													
												</ul>
											</div>
										</div>
									</div>
								</aside>
								<div class="kids_clear"></div>
							</div>
							<!-- .entry-container -->
						</div>
						<div class="bg-level-2 second-part" style="width: 47px;"></div>
					</div>
					<!-- ***************** - END Image floating - *************** -->
				</section>
				<!-- .bottom_content_container -->
			</div>
			<div class="content_bottom_bg"></div>
		</div>
	</div>

	<?php $this->load->view('user/v_footer_bottom') ?>
	</body>
</html>