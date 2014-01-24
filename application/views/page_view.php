<!doctype html> 
<html> 
<head> 
  <base href="<?php echo(site_url()); ?>"> 
  <title><?php echo($judul); ?></title> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css"> 
</head> 
<body> 
<div class="navbar navbar-fixed-top navbar-inverse"> 
<div class="navbar-inner"> 
<div class="container"> 
<!-- Be sure to leave the brand out there if you want it shown --> 
<a class="brand" href="#">Website pertamaku</a> 
 
<!-- Everything you want hidden at 940px or less, place within here --> 
<div class="nav-collapse collapse"> 23 
 
<!-- .nav, .navbar-search, .navbar-form, etc --> 
<ul class="nav pull-right"> 
<li class="divider-vertical"></li> 
<li><a href="<?php echo(site_url()); ?>">Homepage</a></li> 
<li class="divider-vertical"></li> 
<li><a href="<?php echo(site_url('homepage/profil')); ?>">Profil</a></li> 
<li class="divider-vertical"></li> 
</ul> 
</div> 
</div> 
</div> 
</div> 
<div style="height:60px;width:100%;"></div> 
  <div class="container"> 
    <div class="row"> 
      <div class="span2"> 
        <!--Sidebar content--> 
<ul class="nav nav-pills nav-stacked"> 
<li><a href="<?php echo(site_url('homepage/pertama')); ?>">Halaman pertamaku</a></li> 
<li><a href="<?php echo(site_url('homepage/kedua')); ?>">Halaman keduaku</a></li> 
</ul> 
      </div> 
 
      <div class="span10"> 
        <!--Body content-->
        <?php foreach ($post as $post); ?>
<h3><?php echo($post->judul); ?></h3>
<p><?php echo($post->isi); ?></p><br>
<?php endforeach; ?>
<?php echo($links); ?>
      </div> 
    </div> 
  </div> 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
  <script src="bootstrap/js/bootstrap.min.js"></script> 
</body> 
</html>