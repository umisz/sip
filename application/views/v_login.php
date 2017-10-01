<!DOCTYPE html>
<html>
<head>
	<title>Login Admin Posyandu</title>


	<link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/assets/dist/css/login1.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/assets/vendor/morrisjs/morris.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>
<body>
	<div class="text-center" style="padding:50px 0">
		<div class="logo">Login Posyandu</div>
		<!-- Main Form -->
		<div class="login-form-1">
			<form id="login-form" class="text-left" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
				<div class="login-form-main-message"></div>
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<label for="lg_username" class="sr-only">Username</label>
							<input type="text" class="form-control" id="lg_username" name="username" placeholder="username">
						</div>
						<div class="form-group">
							<label for="lg_password" class="sr-only">Password</label>
							<input type="password" class="form-control" id="lg_password" name="password" placeholder="password">
						</div>
					</div>
					<button type="submit" class="login-button" value="login"><i class="fa fa-chevron-right"></i></button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>