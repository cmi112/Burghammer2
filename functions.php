<?php
/**
 * Theme Functions.
 * 
 * @package Burghammer
 */


/**
 * scripts and stylesheet
 * 
 */



// Nav walker Register
if ( ! file_exists( get_template_directory().'/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory().'/class-wp-bootstrap-navwalker.php';
}
// Theme Support 
// Thumbnail option

register_nav_menus( array(
    'primary' => __( 'Primary Menu'),
    'secondary' => __( 'Secondary Menu'),
) );

//  Navbar Register End



// Excerpt Length content-Control start
function set_excerpt_length(){
    return 10;

}
add_filter('excerpt_length','set_excerpt_length');
// Excerpt Length content-Control End

?>