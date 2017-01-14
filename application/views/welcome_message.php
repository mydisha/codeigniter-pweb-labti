
<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Aplikasi Pariwisata Lombok</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/main.min.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/login/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/login/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="logo text-center">
							<img src="<?php echo base_url(); ?>assets/login/img/logo.png" alt="Logo" width="150" height="75">
							</div>
							<form class="form-auth-small" method="POST" action="<?php echo base_url(); ?>auth">
								<div class="form-group">
									<label for="signup-email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="signup-email" name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signup-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signup-password" name="password" placeholder="Password">
								</div>
<!-- 								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div> -->
								<button type="submit" class="btn btn-primary btn-lg btn-block">MASUK</button>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Luar Negeri ? Bukan! Ini Indonesia.</h1>
							<p>Lombok, Nusa Tenggara Barat</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
