<?php $this->load->view('user/v_header') ?>
<?php $this->load->view('user/v_menu') ?>
	
	<div id="kids_middle_container">
		<!-- .content -->
		<div class="kids_top_content">
			<div class="kids_top_content_middle ">
				<!-- <div class="header_container ">
					<div class="l-page-width">
						<h1>Right Sidebar</h1>
						<ul id="breadcrumbs">
							<li><a href="index.html" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
							<li><span class="current_crumb">Right Sidebar</span></li>
						</ul>
					</div>
				</div> -->
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
							<div class="entry-container single-sidebar">
								<main class="blog">

									<?php foreach ($cerita->result() as $key): ?>
										<article class="post-item">
										<div class="post-meta">
											<div class="post-date">
												<span class="day"><?php echo date('d',strtotime($key->created_at)) ?></span>
												<span class="month"><?php echo date('M Y',strtotime($key->created_at)) ?></span>
											</div>
											<!--/ post-date-->
										</div>
										<!--/ post-meta-->
										<div class="post-entry">
											<div class="content-wrapper alignleft">
												<figure>
													<a class="prettyPhoto kids_picture" title="Image Post" href="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>"><img class="pic" src="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>" style="width: 185px" alt="Image Post" /></a>
												</figure>
											</div>
											<!--/ post-thumb-->
											<div class="entry">
												<div class="post-title">
													<a href="<?php echo base_url('index/detail_cerita/'.$key->id) ?>"><?php echo $key->judul ?></a>
												</div>
												<!--/ post-title-->
												<?php echo $key->isi ?>	
											</div>
											<!--/ entry-->
										</div>
										<!--/ post-entry -->
										<div class="post-footer">
											<span class="l-float-right"><a href="<?php echo base_url('index/detail_cerita/'.$key->id) ?>" class="more-link cws_button"> Read more </a></span>
											<div class="post_cats">
												<p><span>Karangan : </span><a class="link" href="#" title="View all posts in">Image</a></p>
											</div>
											<!--/ post-tags -->
											<div class="kids_clear"></div>
										</div>
										<!--/ post-footer-->
									</article>
									<?php endforeach ?>
									
									<!--/ post-item-->
									<!-- //end comments block -->
								</main>
								<aside id="sidebar-right">
									<div class="widget widget_cws_latest_posts type-2">
										<div class="latest-posts-widget">
											<h3 class="widget-title">Dongeng Terbaru</h3>
											<div class="widget-content">
												<ul>
													<?php foreach ($cerita_baru->result() as $key): ?>
														<li>
															<div class="kids_image_wrapper ">
																<a href="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>">
																<img src="<?php echo base_url('assets/uploads/files/'.$key->gambar) ?>" style="width: 70px" alt=""> </a>
															</div>
															<div class="kids_post_content">
																<h4><a href="<?php echo base_url('index/detail_cerita/'.$key->id) ?>"><?php echo $key->judul ?></a>
																	</h4><?php echo substr($key->isi, 0,100) ?>
																<p></p>
																<p class="time-post"></p>
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