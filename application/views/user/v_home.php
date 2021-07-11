<?php $this->load->view('user/v_header') ?>
<?php $this->load->view('user/v_menu') ?>
		<!-- HEADER END -->
		<div class="bg-level-2-page-width-container ">
			<div class="bg-level-2 first-part" id="bg-level-2"></div>
			<div class="l-page-width">
				<div class="kids_slider_bg img_slider">
					<div class="kids_slider_wrapper">
						<div class="kids_slider_inner_wrapper">
							<div class="img-slider">
								<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
									<!-- START REVOLUTION SLIDER 4.6.5 fullwidth mode -->
									<div id="rev_slider_1_1" class="rev_slider fullwidthabanner">
										<ul>
											<!-- SLIDE  -->
											<?php foreach ($slider->result() as $key): ?>
												<li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
												<!-- MAIN IMAGE -->
												<img src="<?= base_url('assets/uploads/files/'.$key->foto) ?>" alt="slide-17" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
												<!-- LAYERS -->
												<!-- LAYER NR. 1 -->
												<!-- <div class="tp-caption kids-slider-header customin fadeout tp-resizeme" data-x="7" data-y="300" data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="600" data-start="200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="2" data-endelementdelay="0.1" data-endspeed="300">Event Taman Baca Anak
												</div> -->
												<!-- LAYER NR. 2 -->
												<!-- <div class="tp-caption kids-slider-header-alt customin fadeout tp-resizeme" data-x="7" data-y="357" data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="600" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="2" data-endelementdelay="0.1" data-endspeed="300">All pages look identically great regardless of the device’s resolution and display size.
												</div> -->
											</li>		
											<?php endforeach ?>
										</ul>
										<div class="tp-bannertimer tp-bottom"></div>
									</div>
								</div>
								<!-- END REVOLUTION SLIDER -->
							</div>
							<!--/ #kids-slider-->
						</div>
						<!--/ .kids_slider_inner_wrapper-->
					</div>
					<!--/ .kids_slider_wrapper-->
				</div>
				<!--/ .kids_slider_bg-->
			</div>
			<!-- .l-page-width -->
			<div class="bg-level-2 second-part" id="bg-level-2"></div>
		</div>
	</div>
	</div>
	<!-- .bg-level-1 -->
	<div id="kids_middle_container">
		<!-- .content -->
		<div class="kids_top_content">
			<div class="kids_top_content_middle homepage">
				<div class="l-page-width">
					<section class="kids_posts_container clearfix">
						<div class="widget_wrapper">
							<div id="cws_benefits-5" class="widget widget_cws_benefits">
								<div class="widget-icon pic"><img src="images/icon-2.png" alt /></div>
								<div class="cws-widget-content benefits_widget">
									<h3 class="widget-title">Taman Bermain</h3>
									<section class="text_part">Taman Bermain bagi anak-anak sangat menyenangkan dan mempunyai kesenangan terrsendiri bagi anak.</section>
									<a href='?page_id=226' class=></a> </div>
							</div>
							<div id="cws_benefits-2" class="widget widget_cws_benefits">
								<div class="widget-icon pic"><img src="images/icon-1.png" alt /></div>
								<div class="cws-widget-content benefits_widget">
									<h3 class="widget-title">Bacaan Menarik</h3>
									<section class="text_part">Taman Baca Anak memiliki banyak bacaan-bacaan menarik untuk anak dan memberikan edukasi anak untuk giat membaca.</section>
									<a href='?page_id=226' class=></a> </div>
							</div>
							<div id="cws_benefits-3" class="widget widget_cws_benefits">
								<div class="widget-icon pic"><img src="images/icon-3.png" alt /></div>
								<div class="cws-widget-content benefits_widget">
									<h3 class="widget-title">Acara Anak-anak</h3>
									<section class="text_part">Acara yang diselenggarakan untuk berkumpul anak-anak</section>
									<a href='?page_id=226' class=></a> </div>
							</div>
						</div>
					</section>
				</div>
				<div class="bottom-border"></div>
			</div>
			<!-- .kids_top_content_middle -->
		</div>
		<div class="bg-level-2-full-width-container kids_bottom_content">
			<div class="bg-level-2-page-width-container no-padding">
				<section class="kids_bottom_content_container">
					<!-- ***************** - START Image floating - *************** -->
					<div class="page-content">
						<div class="container l-page-width">
							<div class="entry-container ">
								<main>
									<div class='grid-row clearfix'>
										<div class='grid-col grid-col-12'>
											<section class='cws-widget'>
												<section class='cws_widget_content'>
													<div class="recent_projects ">
														<h3 class="section-title">Acara Terbaru</h3>
														<div class="projects_carousel clearfix" data-carousel-column="4">
															<?php foreach ($acara->result() as $key): ?>
																<div class="iso-item">
																<div class="content-wrapper">
																	<figure>
																		<a data-rel="prettyPhoto[rs_projects]" class="prettyPhoto kids_picture" href="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>" title="Project 1"><img src="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>" alt="" /> </a>
																	</figure>
																</div>
																<div class="gallery-text">
																	<div class="title"><?php echo $key->judul ?></div>
																	<?php echo $key->isi ?>
																</div>
																<div><a href="<?php echo base_url('index/detail_acara/'.$key->id) ?>" class="cws_button">Lihat Selengkapnya</a></div>
															</div>
															<?php endforeach ?>
														</div>
														<!--/ .projects-carousel -->
													</div>
													<!--/ .work-carousel-->
													<hr />
													<p>&nbsp;</p>
												</section>
											</section>
											<section class='cws-widget'>
												<section class='cws_widget_content'>
													<div class="recent_projects ">
														<h3 class="section-title">Dongeng Terbaru</h3>
														<div class="projects_carousel blog clearfix" data-carousel-column="2">
															<?php foreach ($dongeng->result() as $key): ?>
															<div class="iso-item">
																	<article class="post-item">
																	<div class="post-meta">
																		<div class="post-date">
																			<span class="day"><?php echo date('d', strtotime($key->created_at));?></span>
																			<span class="month"><?php echo date('M Y', strtotime($key->created_at));?></span>
																		</div>
																	</div>
																	<div class="post-entry">
																		<div class="content-wrapper alignleft">
																			<figure>
																				<a data-rel="prettyPhoto[lt_posts]" class="prettyPhoto kids_picture" title="Image Post" href="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>"><img class="pic img-responsive" src="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>" style="width: 185px" alt="" /></a>
																			</figure>
																		</div>
																		<div class="entry">
																			<div class="post-title">
																				<a href="<?php echo base_url('index/detail_cerita/'.$key->id) ?>"><?php echo $key->judul; ?></a>
																			</div><?php echo nl2br(str_replace('', '', (substr($key->isi,0,200))));?>.....</div>
																	</div>
																	<div class="post-footer">
																		<span class="l-float-right"><a href="<?php echo base_url('index/detail_cerita/'.$key->id) ?>" class="more-link cws_button">
																			Baca Selengkapnya</a></span>
																		<div class="post_cats">
																			<p><span>Category: <?php echo ($key->kategori == 1) ? 'Dongeng' : ''; ?></span><a class="link" href="dongeng.php" title="View all posts in"></a></p>

																			<p><span>Karangan: <?php echo $key->nama_pengarang ?></span><a class="link" href="dongeng.php" title="View all posts in"></a></p>

																		</div>
																		<div class="kids_clear"></div>
																	</div>
																</article>			
															</div>
															<?php endforeach ?>
															<div>
														
															</div>
														</div>
														<!--/ .projects-carousel -->
													</div>
													<!--/ .work-carousel-->
													<hr />
												</section>
											</section>
											<section class='cws-widget'>
												<section class='cws_widget_content'>
													<div class="recent_projects ">
														<h3 class="section-title">Cerpen Terbaru</h3>
														<div class="projects_carousel blog clearfix" data-carousel-column="2">
															<?php foreach ($cerpen->result() as $key): ?>
															<div class="iso-item">
																	<article class="post-item">
																	<div class="post-meta">
																		<div class="post-date">
																			<span class="day"><?php echo date('d', strtotime($key->created_at));?></span>
																			<span class="month"><?php echo date('M Y', strtotime($key->created_at));?></span>
																		</div>
																	</div>
																	<div class="post-entry">
																		<div class="content-wrapper alignleft">
																			<figure>
																				<a data-rel="prettyPhoto[lt_posts]" class="prettyPhoto kids_picture" title="Image Post" href="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>"><img class="pic" src="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>" width="200px" height="200px" alt="" /></a>
																			</figure>
																		</div>
																		<div class="entry">
																			<div class="post-title">
																				<a href="<?php echo base_url('index/detail_cerita/'.$key->id) ?>"><?php echo $key->judul; ?></a>
																			</div><?php echo nl2br(str_replace('', '', (substr($key->isi,0,200))));?>.....</div>
																	</div>
																	<div class="post-footer">
																		<span class="l-float-right"><a href="<?php echo base_url('index/detail_cerita/'.$key->id) ?>" class="more-link cws_button">
																			Baca Selengkapnya</a></span>
																		<div class="post_cats">
																			<p><span>Category: <?php echo ($key->kategori == 2) ? 'Cerpen' : ''; ?></span><a class="link" href="dongeng.php" title="View all posts in"></a></p>

																			<p><span>Karangan: <?php echo $key->nama_pengarang ?></span><a class="link" href="dongeng.php" title="View all posts in"></a></p>
																		</div>
																		<div class="kids_clear"></div>
																	</div>
																</article>			
															</div>
															<?php endforeach ?>
															<div>
														
															</div>
														</div>
														<!--/ .projects-carousel -->
													</div>
													<!--/ .work-carousel-->
													<hr />
												</section>
											</section>
											<section class='cws-widget'>
												<section class='cws_widget_content'>
													<div class="recent_projects ">
														<h3 class="section-title">Puisi Terbaru</h3>
														<div class="projects_carousel blog clearfix" data-carousel-column="2">
															<?php foreach ($puisi->result() as $key): ?>
															<div class="iso-item">
																	<article class="post-item">
																	<div class="post-meta">
																		<div class="post-date">
																			<span class="day"><?php echo date('d', strtotime($key->created_at));?></span>
																			<span class="month"><?php echo date('M Y', strtotime($key->created_at));?></span>
																		</div>
																	</div>
																	<div class="post-entry">
																		<div class="content-wrapper alignleft">
																			<figure>
																				<a data-rel="prettyPhoto[lt_posts]" class="prettyPhoto kids_picture" title="Image Post" href="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>"><img class="pic" src="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>" width="200px" height="200px" alt="" /></a>
																			</figure>
																		</div>
																		<div class="entry">
																			<div class="post-title">
																				<a href="<?php echo base_url('index/detail_cerita/'.$key->id) ?>"><?php echo $key->judul; ?></a>
																			</div><?php echo (str_replace('', '',(substr($key->isi,0,200))));?>.....</div>
																	</div>
																	<div class="post-footer">
																		<span class="l-float-right"><a href="<?php echo base_url('index/detail_cerita/'.$key->id) ?>" class="more-link cws_button">
																			Baca Selengkapnya</a></span>
																		<div class="post_cats">
																			<p><span>Category: <?php echo ($key->kategori == 3) ? 'Puisi' : ''; ?></span><a class="link" href="dongeng.php" title="View all posts in"></a></p>

																			<p><span>Karangan: <?php echo $key->nama_pengarang ?></span><a class="link" href="dongeng.php" title="View all posts in"></a></p>
																		</div>
																		<div class="kids_clear"></div>
																	</div>
																</article>			
															</div>
															<?php endforeach ?>
															<div>
													
															</div>
														</div>
														<!--/ .projects-carousel -->
													</div>
													<!--/ .work-carousel-->
													<hr />
												</section>
											</section>
										</div>
									</div>
					</div>
					<!-- ***************** - END Image floating - *************** -->
				</section>
				<!-- .bottom_content_container -->
			</div>
			<div class="content_bottom_bg"></div>
		</div>
	</div>
	<!-- .end_content -->

	<!-- FOOTER BEGIN -->
	<div class="kids_bottom_container footer">
		<div class="l-page-width">
			<div class="wrapper">
				<div class="widget widget_cws_latest_posts">
					<div class="latest-posts-widget">
						<h3 class="widget-title">Bacaan Terbaru</h3>
						<div class="widget-content">
							<ul>
								<?php foreach ($cerita_baru->result() as $key): ?>
									<li>
									<div class="kids_image_wrapper ">
										<a href="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>" class="prettyPhoto kids_mini_picture" data-rel="prettyPhoto[rpwt]">
											<img src="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>" style="width: 70px" alt=""></a>
									</div>
									<div class="kids_post_content">
										<h4><a href="<?php echo base_url('index/detail_cerita/'.$key->id) ?>"><?php echo $key->judul ?></a></h4>
										<?php echo substr($key->isi, 0,180) ?>
										<p class="time-post"><?php echo date('d M Y',strtotime($key->created_at)) ?></p>
									</div>
								</li>
								<?php endforeach ?>							
							</ul>
						</div>
					</div>
				</div>
				<div class="widget widget_calendar">
					<h3 class="widget-title">kalender</h3>
					<div id="calendar_wrap">
					</div>
				</div>
			</div>
			<!-- /wrapper -->
		</div>
		<!--/ l-page-width-->
	</div>
	<!-- .kids_bottom_container -->
	<div class="kids-footer-copyrights footer">
		<div class="l-page-width  clearfix">
			<div class="wrapper">
				<ul class="kids_social">
					<li><a href="https://plus.google.com/" title="Google Plus" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a><span style="background-color:#dd4b39;"></span></li>
					<li><a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook fa-2x"></i></a><span style="background-color:#3b5998;"></span></li>
					<li><a href="https://www.youtube.com/" title="Youtube" target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a><span style="background-color:#b31217;"></span></li>
					<li><a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter fa-2x"></i></a><span style="background-color:#4099ff;"></span></li>
				</ul>
				<div class="widget widget_text">
					<div class="textwidget">Copyrights @2018: Taman Baca Anak</div>
				</div>
			</div>
		</div>
		<div class="dark-mask"></div>
	</div>

	<?php $this->load->view('user/v_footer_bottom') ?>
	</body>
</html>	