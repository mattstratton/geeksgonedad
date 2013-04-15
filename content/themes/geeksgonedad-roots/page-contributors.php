<?php
/*
Template Name: Contributors Page Template
*/
?>
<ul>
<?php $authors = get_users('exclude=1');
foreach ($authors as $user) {
?>
<div> 	
		<?php echo '<div>' . $user->display_name . '</div>'; ?>
        <?php echo '<div>' . $user->user_description . '</div>'; ?>
        <?php echo get_avatar($user->ID, 32); ?>
    
</div>    
    <?php }
?>
