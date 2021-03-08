<div class="banner">
	

  <!-- Skitter Styles -->
  <link href="<?php echo get_bloginfo ('template_directory'); ?>/main_slider/css/skitter.css" type="text/css" media="all" rel="stylesheet" />
  
  <!-- Skitter JS -->
  
  <script src="<?php echo get_bloginfo ('template_directory'); ?>/main_slider/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo get_bloginfo ('template_directory'); ?>/main_slider/js/jquery.skitter.min.js"></script>
  
  <!-- Init Skitter -->
  <script type="text/javascript" language="javascript">
    $(document).ready(function() {
      $('.skitter-large').skitter({
        responsive: {
          small: {
            animation: 'fade',
            max_width: 768,
            suffix: '-small'
          },
          medium: {
            animation: 'directionRight',
            max_width: 1024,
            suffix: '-medium'
          }
        },
		  navigation:'true',
		  animation: 'circles',
		  dots:'false',
		  interval:'5000',
      });
    });
  </script>
  
  <!-- Custom -->
<!--  <link href="css/banner.css" type="text/css" media="all" rel="stylesheet" />-->
  <script src="<?php echo get_bloginfo ('template_directory'); ?>/main_slider/js/app.js"></script>


      <div class="skitter-large-box">
        <div class="skitter skitter-large with-dots">
          <ul>
            <li>
				<img src="<?php echo get_bloginfo ('template_directory'); ?>/main_slider/images/banner3.jpg" class="circles" />
				<div class="label_text"><p>Ministry of Education</p></div>
			</li>
            <li>
				<img src="<?php echo get_bloginfo ('template_directory'); ?>/main_slider/images/banner4.jpg" class="circlesInside" />
				<div class="label_text"><p>Ministry of Education</p></div>
			</li>
            <li>
				<img src="<?php echo get_bloginfo ('template_directory'); ?>/main_slider/images/banner5.jpg" class="circlesRotate" />
				<div class="label_text"><p>Ministry of Education</p></div>
			</li>
            <li>
				<img src="<?php echo get_bloginfo ('template_directory'); ?>/main_slider/images/banner6.jpg" class="cube" />
				<div class="label_text"><p>Ministry of Education</p></div>
			</li> 
          </ul>
        </div>
      </div>


	
	
</div>