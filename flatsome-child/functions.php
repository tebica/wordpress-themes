<?php

if ( ! function_exists( 'flatsome_posted_on' ) ) :

// Prints HTML with meta information for the current post-date/time and author.
function flatsome_posted_on() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

    $time_string = sprintf( $time_string,
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() ),
        esc_attr( get_the_modified_date( 'c' ) ),
        esc_html( get_the_modified_date() )
    );

    $posted_on = sprintf(
        esc_html_x( '%s', 'post date', 'flatsome' ),
        $time_string
    );

    echo '<span class="posted-on">' . $posted_on . '</span>';

}
endif;

?>