//THE CODE BELOW ADDS THE CLASS "IS-LISTING-AUTHOR" TO THE BODY
//PUT THIS CODE IN THE CHILD THEME FUNCTIONS.PHP FILE
//CREATE A SECTION IN ELEMENTOR AS A TEMPLATE THEN COPY AND PASTE THE SHORTCODE IN THE SHORTCODE CELEMENT ON SINGLE LISTING.
//ADD CUSTOM CLASS TO SHORTCODE ELEMENT IN SINGLE LISTING.

<?php
	//ADD CLASS TO THE BODY OF THE SINGLE LISTING
	//===========================================
	add_filter( 'body_class', function( $classes ) {
		if ( is_singular( 'job_listing' ) ) {
			global $post;
			if ( absint( get_current_user_id() ) === absint( $post->post_author ) ) {
				$classes[] = 'is-listing-author';
			}
		}
	 
		return $classes;
	} );
?>