<!doctype html>
<html>
<head>
	<base href="<?php echo(site_url()); ?>">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="offset2 span10">
				<fieldset>
					<legend>Login Form</legend>
					<form action="<?php echo(site_url('login/proses')); ?>" method="post">
						<label>Username:</label>
						<input type="text" name="username"> <br>
						<label>Password</label>
						<input type="password" name="password"> <br>
						<input type="submit" class="btn btn-primary medium" value="login">
					</form>
				</fieldset>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>