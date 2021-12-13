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

function wpb_adding_scripts() {
    wp_enqueue_script('mixitup-min-js', get_template_directory_uri() . './mixitup.min.js');
 
     
    wp_enqueue_script('mixitup-min-js');
    }
      
    add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );


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



// Thumbnail for Projects Start

function custom_theme_feature(){
    add_theme_support('post-thumbnails');

    // Featured Image  theme set up

     set_post_thumbnail_size( 50, 50);
    // Image size for single posts
    add_image_size( 'project-large', 800, 400,true );
    add_image_size( 'project-thumbnail', 300, 200,true);

}
add_action('after_setup_theme','custom_theme_feature');

// Thumbnail for Projects End



// Custom Post Type start
function wporg_custom_post_type() {

    register_post_type('projects',

    array(
        'labels'      => array(
            'name'          => __('Projects'),
            'singular_name' => __('Project'),
        ),
        
        'public'      => true,
        'has_archive' => true,
        'menu_icon' =>'dashicons-grid-view',
        'supports' => array('title','editor','excerpt','thumbnail','revisions')
       
          
    )
    
);

// categories
register_taxonomy(
    'project_categories',
    'projects',
    array(
      'label'        => __( 'Categories' ),
      'rewrite'      => false,
      'hierarchical' => true,
      'capabilities' => array( 'edit_terms' => 'manage_categories' ),
      'all_items'=>'Categories',
      'query_var'=>true,
      'rewrite'=>array('slug'=>'project_categories')
    )
  );
  
  // tags
  register_taxonomy(
    'project_tags',
    'projects',
    array(
      'label'        => __( 'Tags' ),
      'rewrite'      => false,
      'hierarchical' => false,
      'capabilities' => array( 'edit_terms' => 'manage_categories' )
    )
  );






}
add_action('init', 'wporg_custom_post_type');






// Custom Post Type End




// Custom Post Type Jobs Start
function wporg_custom_post_type_jobs() {

  register_post_type('jobs',

  array(
      'labels'      => array(
          'name'          => __('Jobs'),
          'singular_name' => __('Job'),
      ),
      
      'public'      => true,
      'has_archive' => true,
      'menu_icon' =>'dashicons-chart-bar',
      'supports' => array('title','editor','excerpt','thumbnail','revisions')
     
        
  )
  
);

// categories
register_taxonomy(
  'job_categories',
  'jobs',
  array(
    'label'        => __( 'Categories' ),
    'rewrite'      => false,
    'hierarchical' => true,
    'capabilities' => array( 'edit_terms' => 'manage_categories' ),
    'all_items'=>'Categories',
    'query_var'=>true,
    'rewrite'=>array('slug'=>'job_categories')
  )
);

// tags
register_taxonomy(
  'project_tags',
  'jobs',
  array(
    'label'        => __( 'Tags' ),
    'rewrite'      => false,
    'hierarchical' => false,
    'capabilities' => array( 'edit_terms' => 'manage_categories' )
  )
);






}
add_action('init', 'wporg_custom_post_type_jobs');






// Custom Post type jobs End



// add_filter('show_admin_bar','__return_false');   /* when you are hiden the admin bar */

// show admin bar in front end
function admin_bar(){
    if(is_user_logged_in()){
      add_filter( 'show_admin_bar', '__return_true' , 1000 );
    }
  }
  add_action('init', 'admin_bar' );


// Excerpt Length content-Control start
function set_excerpt_length(){
    return 10;

}
add_filter('excerpt_length','set_excerpt_length');
// Excerpt Length content-Control End

?>