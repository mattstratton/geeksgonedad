<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
      <?php if (is_front_page()) { ?>
	      <div class="logo-row">
	      	<div class="container">
		      	<img src = "/content/themes/geeksgonedad-roots/assets/img/ggd.png">
		    </div>
	      </div>
	      <div id="wrap" class="container front-page" role="document">
	      	<div id="content" class="row">
		      	<div id="main" class="span12" role="main">
			      	<div class= "row frontpage">
				      	<div class="span6">
					      	<strong class="introtitle">Geeks Gone Dad is the web home of some of Chicago's geekiest fathers.</strong>
					      	
					      	<div class="row">
						      	<div class="span3">
							      	<h1 class="frontpage-headers">We love being Dads</h1>
							      	Etc, etc, stuff about why being a Dad is so awesome. Content goes here. Someone other than Matt should write it.
				
							    </div>
							    <div class="span3">
								    <h1 class="frontpage-headers">Geeks FTW</h1>
								    Technology and other nerdery is the other half of us. We like to do nerdy things and other stuff. Matt doesn't have anything to write here yet.	
								</div>
							</div>
				      	</div>
							<div class="span6">
								<img src="/content/themes/geeksgonedad-roots/assets/img/ggd-group.png">
							</div>
						</div>
					</div>
		      	</div>
	      </div>
      <?php } 
		         else {
	         ?>
  <div class="wrap container" role="document">
    <div class="content row">
      <div class="main <?php echo roots_main_class(); ?>" role="main">

        <?php include roots_template_path(); ?>
      </div>

      

      <!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php include roots_sidebar_path(); ?>
      </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->
<?php } ?>
  <?php get_template_part('templates/footer'); ?>

</body>
</html>
