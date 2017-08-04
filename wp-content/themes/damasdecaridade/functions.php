<?php
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


modo_manutencao() {   
if
 ( !current_user_can( 
'edit_themes'  
) || !is_user_logged_in() ) { 
die(
'Site em Manutenção'
); 
} 
} 
add_action('get_header', 'modo_manutencao');

?> 