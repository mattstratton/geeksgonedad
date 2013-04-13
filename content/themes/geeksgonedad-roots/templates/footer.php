<footer id="content-info" class="footer-background" role="contentinfo">
  <div class="container">
	  <div class="row bottomnav">
	    <?php dynamic_sidebar('sidebar-footer'); ?>
	    <div class="span12">
	    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
	    </div>
	  </div>
  </div>
</footer>

<?php wp_footer(); ?>
