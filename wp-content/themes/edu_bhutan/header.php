<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'travelportal' ), max( $paged, $page ) );

	?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- bootstrap-->
    <link href="<?php echo get_bloginfo ('template_directory'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<script src="<?php echo get_bloginfo ('template_directory'); ?>/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>

	<!-- MAIN STYLE  -->
    <link href="<?php echo get_bloginfo ('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" media="all">

    <!-- Le fav and touch icons -->

			<!-- ***** FONT AWESOME ***** -->
				<link rel="stylesheet" href="<?php echo get_bloginfo ('template_directory'); ?>/fontawesame/css/all.css" crossorigin="anonymous">
				<script src="<?php echo get_bloginfo ('template_directory'); ?>/fontawesame/css/all.js"></script>
			<!-- XXXXXXXXXX -->


<script src="<?php echo get_bloginfo ('template_directory'); ?>/main_slider/js/jquery-2.1.1.min.js"></script>
	  
<!-- Google Fonts -->
<!--    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>-->

	  
	  <link rel="shortcut icon" href="<?php echo get_bloginfo ('template_directory'); ?>/images/sherig-logo2.png" type="image/x-icon"/>

  </head>

  <body>



<header>
	<div class="container">
		
		<div class="col-lg-12 col-md-12 logo">
				<img src="<?php echo get_bloginfo ('template_directory'); ?>/images/sherig-logo.png">
		
			<div class="trnsbtn">
				<a href="#"><li><img src="<?php echo get_bloginfo ('template_directory'); ?>/images/Us_flag.png">English</li></a>
				<a href="#" style="font-size:14px;"><li><img src="<?php echo get_bloginfo ('template_directory'); ?>/images/bhutan.png">རྫོང་ཁ</li></a>
			</div>
		</div>
<!--
		<div class="col-lg-6 col-md-12 search">

				<form>
					<input type="text" required="" placeholder="SEARCH">
					<button type="submit"><i class="fas fa-search"></i></button>
				</form>
		</div>
-->
	</div>
	
	<div class="mainnev">
		<div class="container">
		<?php get_sidebar(mainmenu); ?>
		</div>
	</div>
</header>

