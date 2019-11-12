<?php
	/*
	 * Use default value in the editor as 
	 * {embed_post_author_email}
	 * Then it will show the embeded post's author email
	 */
	add_filter('fluentform_editor_shortcode_callback_embed_post_author_email', function ($code) {
		return get_the_author_meta('user_email');
	});
?>