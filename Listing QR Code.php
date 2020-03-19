//HINT QR CODE GENERATOR
//=========================
function qr_code_generator() {

	$permalink = get_permalink($post->ID);
	echo '<img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data='.$permalink.'">';

}
add_shortcode( 'listing_qr', 'qr_code_generator' );
