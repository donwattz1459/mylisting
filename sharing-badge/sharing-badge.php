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
	
	//GET CURRENT PAGE URL
	//USE SHORTCODE [get_url} TO SHOW URL ON FRONT END
	//===========================================
	add_shortcode ('geturl', 'get_current_page_url');
	function get_current_page_url() {
		$pageURL = 'http';
		if( isset($_SERVER["HTTPS"]) ) {
			if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}
?>