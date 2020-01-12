<?php
//Display number of reviews on website using the shortcode [review_count]
function listing_review_count() { 
$count = count( get_comments( array(
    'post_id' => get_the_ID(),
    'type' => 'job_listing'
) ) );
return $count; 
} 
add_shortcode('review_count','listing_review_count'); 
