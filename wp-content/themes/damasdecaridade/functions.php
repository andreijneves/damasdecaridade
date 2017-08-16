<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_theme_support( 'post-thumbnails' );
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 15 );
remove_filter( 'the_excerpt', 'wpautop' );

// Registro das suas widgets
if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
        'name' => __( 'Side Bar dos POSTS'),
        'id' => 'sidebar-1',
        'description' => __( ''),
        'before_title' => '',
        'after_title' => '',
    ) );
}


?> 