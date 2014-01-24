<!doctype html>
<html>
<head>
	<base href="<?php echo(site_url()); ?>">
	<title>Administrator</title>
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
						<li><a href="<?php echo(site_url('login/administrator')); ?>">Administrator</a></li>
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
				<?php if (count($daftar) != 0): ?>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Judul</th>
							<th colspan="2">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($daftar as $post) : ?>
						<tr>
							<td><?php echo($post->judul); ?></td>
							<td><a href="<?php echo(site_url("login/hapus/{$post->id}")); ?>">Hapus</a></td>
							<td><a href="<?php echo(site_url("login/ubah/{$post->id}")); ?>">Ubah</a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php endif; ?>
			</div>
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
  <script src="bootstrap/js/bootstrap.min.js"></script> 
</body>	
</html>