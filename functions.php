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

//  Stylesheet and Scripts Register Start
function load_bootstrap(){
    wp_enqueue_style('bootstrap-css',get_template_directory_uri()."/css/bootstrap.min.css" ,array(), '5.1.0', 'all');

    wp_register_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js','jquery',false,true);
    wp_enqueue_script( 'bootstrap');

}
add_action('wp_enqueue_scripts','load_bootstrap');


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

?>