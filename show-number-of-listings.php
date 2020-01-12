<?php
// Display the total number of published listings using the shortcode [total_listings]
function number_of_listings($atts) {
 return wp_count_posts('job_listing')->publish;
}
add_shortcode('total_listings', 'number_of_listings');
