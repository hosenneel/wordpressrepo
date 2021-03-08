
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>

<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
<!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>-->


<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

	//////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });
    
	
}); // jquery end
</script>

<style type="text/css">
	@media all and (min-width: 992px) {
		.navbar{ padding-top: 0; padding-bottom: 0; }
		.navbar .has-megamenu{position:static!important;}
		.navbar .megamenu{left:0; right:0; width:100%; padding:20px;  }
		.navbar .nav-link{ padding-top:1rem; padding-bottom:1rem;  }
	}
</style>



<!-- ========================= SECTION CONTENT ========================= -->



<nav class="navbar navbar-expand-lg navbar-dark">

  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">

<ul class="navbar-nav">
	<li class="nav-item active"> <a class="nav-link" href="<?php bloginfo('home'); ?>/">Home </a> </li>
	<li class="nav-item"><a class="nav-link" href="<?php bloginfo('home'); ?>/ministers-office"> Minister's Office </a></li>
	<li class="nav-item"><a class="nav-link" href="<?php bloginfo('home'); ?>/#"> Secretariat </a></li>
	<li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="<?php bloginfo('home'); ?>/#" data-toggle="dropdown"> Departments </a>
        <ul class="dropdown-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="<?php bloginfo('home'); ?>/#">Directorate of Services (DoS)</a></li>
			<li><a class="dropdown-item" href="<?php bloginfo('home'); ?>/#">Department of School Education (DSE)</a></li>
			<li><a class="dropdown-item" href="<?php bloginfo('home'); ?>/#">Department of Youth & Sports (DYS)</a></li>
			<li><a class="dropdown-item" href="<?php bloginfo('home'); ?>/#">Department of Adult & Higher Education (DAHE)</a></li>
        </ul>
    </li>
	<li class="nav-item dropdown has-megamenu">
		<a class="nav-link dropdown-toggle" href="<?php bloginfo('home'); ?>/#" data-toggle="dropdown"> Online Services  </a>
	    <div class="dropdown-menu megamenu" role="menu">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col-megamenu">
	                            <ul class="list-unstyled">
	                                <li><a href="<?php bloginfo('home'); ?>/#">Education Management Information System</a></li>
									<li><a href="<?php bloginfo('home'); ?>/#">Education Staff Welfare Scheme (ESWS)</a></li>
	                            </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                                <ul class="list-unstyled">
                                    <li><a href="<?php bloginfo('home'); ?>/#">Performance Management System</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-2">
                        	<div class="col-megamenu">
                                <ul class="list-unstyled">
                                    <li><a href="<?php bloginfo('home'); ?>/#">Disaster Management Unit</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>    
                        <div class="col-md-2">
                        	<div class="col-megamenu">
                                <ul class="list-unstyled">
                                    <li><a href="<?php bloginfo('home'); ?>/#">Sherig Endowment Fund</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                    </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
	</li>
	<li class="nav-item dropdown has-megamenu">
		<a class="nav-link dropdown-toggle" href="<?php bloginfo('home'); ?>/#" data-toggle="dropdown"> Downloads  </a>
	    <div class="dropdown-menu megamenu" role="menu">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col-megamenu">
	                            <ul class="list-unstyled">
	                                <li><a href="<?php bloginfo('home'); ?>/#">Forms</a></li>
									<li><a href="<?php bloginfo('home'); ?>/#">Youth Digest Magazine</a></li>
	                            </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-3">
                        	<div class="col-megamenu">
                                <ul class="list-unstyled">
                                    <li><a href="<?php bloginfo('home'); ?>/#">Publications</a></li>
									<li><a href="<?php bloginfo('home'); ?>/#">MoE Presentation Template</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-md-2">
                        	<div class="col-megamenu">
                                <ul class="list-unstyled">
                                    <li><a href="<?php bloginfo('home'); ?>/#">Guidelines</a></li>
									<li><a href="<?php bloginfo('home'); ?>/#">Annual Performance Agreement</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>    
                        <div class="col-md-2">
                        	<div class="col-megamenu">
                                <ul class="list-unstyled">
                                    <li><a href="<?php bloginfo('home'); ?>/#">Newsletter</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                    </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
	</li>
	<li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="<?php bloginfo('home'); ?>/#" data-toggle="dropdown"> About Us </a>
        <ul class="dropdown-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="<?php bloginfo('home'); ?>/vision-mission">Vision & Mission</a></li>
			<li><a class="dropdown-item" href="<?php bloginfo('home'); ?>/organization-chart">Organization chart</a></li>
			<li><a class="dropdown-item" href="<?php bloginfo('home'); ?>/milestones">Milestones</a></li>
        </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="<?php bloginfo('home'); ?>/contact"> Contact Us </a></li>

</ul>

  </div> <!-- navbar-collapse.// -->

</nav>




