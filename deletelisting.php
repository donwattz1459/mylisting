<?php
add_action( 'wp', 'expire_events_daily' );
function expire_events_daily() {
    if ( ! wp_next_scheduled( 'delete_expired_events' ) ) {
        wp_schedule_event( time(), 'hourly', 'delete_expired_events');
    }
}
add_action( 'delete_expired_events', 'delete_expired_events_callback' );


function delete_expired_events_callback() 
{
    $args = [
        'post_type'      => 'listing',
        'posts_per_page' => -1,
        'fields'         => 'ids', //only get post id's
        'meta_query'     => [
            [
               'key'     => 'event_date',
               'value'   => current_time( 'Ymd' ),
               'compare' => '<'
            ]
        ]
    ];

    $events = get_posts( $args );

    if ( $events ) {
        // Loop through the post ID's and delete the post
        foreach ( $events as $id )
            wp_trash_post( $id );
    }
}
