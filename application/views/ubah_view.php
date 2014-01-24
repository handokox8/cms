<!doctype html>
<html>
<head>
	<base href="<?php echo(site_url()); ?>">
	<title>Ubah Post</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css">
</head>
<body>
	<div class="navbar navbar-fixed-top navbar-inverse">
		<div class="navbar-inner">
			<div class="container">

				<a class="brand" href="#">Administrator</a>

				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<li class="divider-vertical"></li>
						<li><a href="<?php echo(site_url('login/daftar_post')); ?>">Daftar Post</a></li>
						<li class="devider-vertical"></li>
						<li><a href="<?php echo(site_url('login/logout')); ?>"></a></li>
						<li class="devider-vertical"></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div style="height:60px;width:100%"></div>
	<div class="container">
		<div class="row">
			<div class="offset2 span10">
				
				<form action="<?php echo(site_url('login/proses_ubah')); ?>" method="post">

					<?php foreach ($ubah as $post) : ?>
					<label>Judul</label>
					<input type="text" class="span8" name="judul" value="<?php echo($post->judul); ?>"><br>
					<label>Teks</label>
					<textarea name="isi" class="span8" rows="10"><?php echo($post->isi); ?></textarea><br>
					<input type="submit" class="btn btn-primary btn-large" value="Ubah!">
					<input type="text" value="<?php echo $post->id; ?>" name="id" style="display:none;">
				<?php endforeach; ?>
				</form>
			</div>
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
  <script src="bootstrap/js/bootstrap.min.js"></script> 
</body>	
</html>