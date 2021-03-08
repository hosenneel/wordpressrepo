<div class="photogallery">
<h1 class="">Image Gallery</h1>	<div class="container">
<!--		<h2>Gallery</h2>-->


<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">-->
<!--<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700'>-->
<!--<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>-->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css'>
<!--<link rel="stylesheet" href="./style.css">-->



<!-- partial:index.partial.html -->
<section>
	
	<div class="row gallery">
		<div class="col-lg-2 col-md-2 col-xs-6 thumb">
			<a href="<?php echo get_bloginfo ('template_directory'); ?>/images/gallery/G1.jpg">
				<figure><img class="img-fluid img-thumbnail" src="<?php echo get_bloginfo ('template_directory'); ?>/images/gallery/G1.jpg" ></figure>
			</a>
			<a href="<?php echo get_bloginfo ('template_directory'); ?>/images/gallery/G2.jpg">
				<figure><img class="img-fluid img-thumbnail" src="<?php echo get_bloginfo ('template_directory'); ?>/images/gallery/G2.jpg"></figure>
			</a>
		</div>

		<div class="col-lg-4 col-md-4 col-xs-6 thumb">
			<a href="<?php echo get_bloginfo ('template_directory'); ?>/images/gallery/G3.jpg">
				<figure><img class="img-fluid img-thumbnail" src="<?php echo get_bloginfo ('template_directory'); ?>/images/gallery/G3.jpg"></figure>
			</a>
		</div>

		<div class="col-lg-2 col-md-2 col-xs-6 thumb">
			<a href="<?php echo get_bloginfo ('template_directory'); ?>/images/gallery/G5.jpg">
				<figure><img class="img-fluid img-thumbnail" src="<?php echo get_bloginfo ('template_directory'); ?>/images/gallery/G5.jpg"></figure>
			</a>
				<a href="<?php echo get_bloginfo ('template_directory'); ?>/images/gallery/G6.jpg">
				<figure><img class="img-fluid img-thumbnail" src="<?php echo get_bloginfo ('template_directory'); ?>/images/gallery/G6.jpg"></figure>
			</a>
		</div>

		<div class="col-lg-4 col-md-4 col-xs-6 thumb">
			<a href="<?php echo get_bloginfo ('template_directory'); ?>/images/gallery/G4.jpg">
				<figure><img class="img-fluid img-thumbnail" src="<?php echo get_bloginfo ('template_directory'); ?>/images/gallery/G4.jpg"></figure>
			</a>
		</div>

	</div>
</section>
<!-- partial -->
<!--  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>-->
<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.5/popper.min.js'></script>-->
<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
<!--<script  src="./script.js"></script>-->



			
			<script type="text/jscript">
			$(document).ready(function() {
	$(".gallery").magnificPopup({
		delegate: "a",
		type: "image",
		tLoading: "Loading image #%curr%...",
		mainClass: "mfp-img-mobile",
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
		}
	});
});

			</script>
	</div>
</div>