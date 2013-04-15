<?php
/*
Template Name: Contributors Page Template
*/
?>
<div class="row-fluid">
<?php $authors = get_users('exclude=1');
foreach ($authors as $user) {
	
	
?>
<div class="author-row span4"> 
		<h1 class="author-name"><?php echo $user->display_name; ?></h1>
		<?php $avatar = "<img alt='{$safe_alt}' src='{$default}' class='avatar avatar-{$size} photo author-photo' height='{$size}' width='{$size}' />"; 
			$authorphoto = apply_filters('get_avatar', $avatar, $user->ID,120, $default, $alt);
			
		?>
		<?php echo $authorphoto; ?>
		<div class="authorbio">
       	 <?php echo $user->user_description; ?> 
		</div>   
</div>    
    <?php } ?>
</div>
