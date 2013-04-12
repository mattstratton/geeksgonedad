<li class="clearfix"><div class="avatar-wrapper">
	<?php echo get_avatar(get_comment_author_email(get_comment_id()),'48', usernoisepro_url("/images/default-avatar.gif") ) ?>
	</div><div class="single-comment-content">
		<h4>
		<?php $comment = get_comment(get_comment_ID()) ?>
		<?php $userdata = null ?>
		<?php if ($comment->user_id): ?><?php $userdata = get_userdata($comment->user_id) ?><?php endif ?><?php if ($userdata): ?><?php echo esc_html($userdata->display_name) ?><?php else: ?><?php comment_author() ?><?php endif ?>, <span class="date"><?php comment_date()?></span></h4>
		<?php comment_text() ?>
	</div>
</li>