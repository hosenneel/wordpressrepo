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
		  dots:'false'
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
				<div class="label_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#see-more" class="btn btn-small btn-yellow">See more</a></p></div>
			</li>
            <li>
				<img src="<?php echo get_bloginfo ('template_directory'); ?>/main_slider/images/banner4.jpg" class="circlesInside" />
				<div class="label_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officiis voluptatum reprehenderit vitae amet beatae dolorem labore dignissimos nesciunt. Harum, blanditiis suscipit beatae unde id non, necessitatibus praesentium nisi quidem. <a href="#" class="btn btn-small btn-yellow">See more</a></p></div>
			</li>
            <li>
				<img src="<?php echo get_bloginfo ('template_directory'); ?>/main_slider/images/banner5.jpg" class="circlesRotate" />
				<div class="label_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="btn btn-small btn-yellow">See more</a></p></div>
			</li>
            <li>
				<img src="<?php echo get_bloginfo ('template_directory'); ?>/main_slider/images/banner6.jpg" class="cube" />
				<div class="label_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit eos nihil corrupti inventore id culpa repellat molestiae quam at molestias. <a href="#" class="btn btn-small btn-yellow">See more</a></p></div>
			</li> 
          </ul>
        </div>
      </div>


	
	
</div>