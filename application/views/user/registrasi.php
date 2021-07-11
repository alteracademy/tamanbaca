<?php $this->load->view ("user/header") ?>
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Registrasi</h1>
		<em></em>
		<h2><a href="<?= base_url() ?>">Home</a><label>/</label>Registrasi</a></h2>
	</div>
</div>
<!--login-->

<div class="container">
	<div class="login">
			<form method="post" action="<?= base_url('index/saveregistrasi') ?>" >
			<div class="col-md-offset-3 col-md-6 login-do">
			<div class="login-mail">
					<input type="text" name="nama" placeholder="Full Name" required="">
					<i  class="glyphicon glyphicon-user"></i>
				</div>
				<div class="login-mail">
					<input type="text" name="no_telpon" placeholder="Phone Number" required="">
					<i  class="glyphicon glyphicon-phone"></i>
				</div>
				<div class="login-mail">
					<input type="text" name="email" placeholder="Email" required="">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="text" name="password" placeholder="password" required="">
					<i class="glyphicon glyphicon-password"></i>
				</div>
				<div class="login-mail">Kota / Kabupaten :  
					<select name="id_kota">
					<?php foreach ($city->result() as $kota):?>
						<option value="<?php echo $kota -> id_kota?>"><?php echo $kota->kota?></option>
					<?php endforeach ?>
					</select>
				</div>
				<div class="login-mail">
					<input type="text" name="alamat" placeholder="Alamat Lengkap" required="">
					<i class="glyphicon glyphicon-home"></i>
				</div>
				<label class="hvr-skew-backward">
					<input type="submit" value="Submit">
				</label>
			
			</div>	
			<div class="clearfix"> </div>
			</form>
		</div>
</div>

<!--//login-->
<!--brand-->
		<div class="container">
			<div class="brand">
			</div>
			</div>
			<!--//brand-->
			</div>
			
		</div>
	<!--//content-->
	<!--//footer-->
<?php $this->load->view ("user/footer") ?>