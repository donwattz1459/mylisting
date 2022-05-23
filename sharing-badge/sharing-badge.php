//THE CODE BELOW ADDS THE CLASS "IS-LISTING-AUTHOR" TO THE BODY
//PUT THIS CODE IN THE CHILD THEME FUNCTIONS.PHP FILE
//CREATE A SECTION IN ELEMENTOR AS A TEMPLATE THEN COPY AND PASTE THE SHORTCODE IN THE SHORTCODE CELEMENT ON SINGLE LISTING.
//ADD CUSTOM CLASS TO SHORTCODE ELEMENT IN SINGLE LISTING.

<?php
	add_shortcode ('get_dark_badge', 'getdarkbadge');
function getdarkbadge() {
	$pageURL = 'http';
	if( isset($_SERVER["HTTPS"]) ) {
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return '<a href="' . $pageURL . '"><img style="width: 175px !important;" src="https://gotriber.com/wp-content/uploads/2019/10/Find-Us-On-Triber-Badge.png" /></a>';
}

add_shortcode ('get_light_blue_badge', 'getlightbluebadge');
function getlightbluebadge() {
	$pageURL = 'http';
	if( isset($_SERVER["HTTPS"]) ) {
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return '<a href="' . $pageURL . '"><img style="width: 175px !important;" src="https://gotriber.com/wp-content/uploads/2019/10/Find-Us-On-Triber-Badge-Minimal.png" /></a>';
}

add_shortcode ('get_black_badge', 'getblackbadge');
function getblackbadge() {
	$pageURL = 'http';
	if( isset($_SERVER["HTTPS"]) ) {
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return '<a href="' . $pageURL . '"><img style="width: 175px !important;" src="https://gotriber.com/wp-content/uploads/2019/10/Find-Us-On-Triber-Badge-B&amp;W.png" /></a>';
}

?>
