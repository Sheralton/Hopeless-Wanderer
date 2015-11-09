<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/lightbox.css">


	<?php wp_head();?>
</head>
<body>

	
	<?php if (!is_front_page()){?>
		<div class="row header">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a href="<?php bloginfo('url');?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="container">
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="<?php bloginfo('url');?>/about">ABOUT</a></li>
				        <li><a href="<?php bloginfo('url');?>/places">PLACES</a></li>
				        <li><a href="<?php bloginfo('url');?>/journal">JOURNAL</a></li>
				        <li><a href="<?php bloginfo('url');?>/freeguides">FREE GUIDES</a></li>
				      </ul>
						
				    </div><!-- /.navbar-collapse -->
				</div>
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
	<?php }?>
