<body data-type-of-widget="2" class="home page kids-front-page t-pattern-1">
	<!-- HEADER BEGIN -->
	<div class="top-panel">
		<div class="l-page-width clearfix">
			<div class="wrapper">
				<div class="widget widget_cws_tweets">
					<div class='cws-widget-content '>
						<div class="latest_tweets ">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ .top-panel-->
	<div class="kids-bg-level-1">
		<div class="bg-level-1"></div>
		<header id="kids_header">
			<div class="l-page-width clearfix">
				<ul class="kids_social">

					<li><a href="https://plus.google.com/" title="Google Plus" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a><span style="background-color:#dd4b39;"></span></li>
					<li><a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook fa-2x"></i></a><span style="background-color:#3b5998;"></span></li>
					<li><a href="https://www.youtube.com/" title="Youtube" target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a><span style="background-color:#b31217;"></span></li>
					<li><a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter fa-2x"></i></a><span style="background-color:#4099ff;"></span></li>
					<li class="search">
						<a href="#" title="Search"></a><span></span></li>
					<li>
						<form role="search" id="search-form" method="get" action="">
							<input type="text" value="" name="s" id="s" />
							<input class="button medium button-style1" type="submit" id="search-submit" value="Search" />
						</form>
					</li>
				</ul>
				<!-- .kids_social -->
				<div class="kids_clear"></div>
				<div id="kids_logo_block" class="logo-position-left">
					<a id="kids_logo_text" href="index.php"><img src="images/taman.png" alt="Taman Baca Anak" title="Taman Baca Anak" /></a>
				</div>
				<nav id="kids_main_nav" class="menu-position-right">
					<div class="menu-button">
						<span class="menu-button-line"></span>
						<span class="menu-button-line"></span>
						<span class="menu-button-line"></span>
					</div>
					<ul id="menu-main" class="clearfix flexnav " data-breakpoint="800">
						<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item"><a href="<?php echo base_url() ?>">Beranda</a></li>
						<li class="menu-item"><a href="#">Kumpulan Cerita</a>
							<ul class="sub-menu">
								<li class="menu-item"><a href="<?php echo base_url('index/dongeng') ?>">Dongeng</a></li>
								<li class="menu-item"><a href="<?php echo base_url('index/cerpen') ?>">Cerpen</a></li>
								<li class="menu-item"><a href="<?php echo base_url('index/puisi') ?>">Puisi</a></li>
							</ul>
						</li>
						<li class="menu-item"><a href="<?php echo base_url('index/acara') ?>">Acara</a>
						<li class="menu-item"><a href="<?php echo base_url('index/kontak') ?>">Kontak</a></li>
						<?php if($this->session->userdata('login_user')){ ?>
							<li class="menu-item"><a href="#">Akun</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="<?php echo base_url('akun/index/'.$this->session->userdata('id_user')) ?>">Lihat Akun</a></li>
									<li class="menu-item"><a href="<?php echo base_url('akun/ubah_profile/'.$this->session->userdata('id_user')) ?>">Ubah Akun</a></li>
									<li class="menu-item"><a href="<?php echo base_url('akun/posting') ?>">Unggah Cerita</a></li>
									<li class="menu-item"><a href="<?php echo base_url('login/logout') ?>">Keluar</a></li>
								</ul>
							</li>
						<?php }else{ ?>
						<li class="menu-item"><a href="<?php echo base_url('login') ?>"> Masuk </a></li>
						<li class="menu-item"><a href="<?php echo base_url('login/registrasi') ?>"> Daftar </a></li>
						<?php } ?>
					</ul>
				</nav>
				<!-- #kids_main_nav -->
			</div>
			<!--/ .l-page-width-->
		</header>
	</div>