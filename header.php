<?php 

/**
 * Header Template.
 * 
 * @package Burghammer
 */
include_once('functions.php');

;?>

<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- styles -->
   <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"> 
  <!-- Font Awsome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
   

  <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>  </title>
  <?php wp_head();?>
 
</head>

<body <?php body_class();?>>
<?php
if( function_exists('wp_body_open')){
    wp_body_open();
}
?>



  <div class="container">


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light " role="navigation">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="<?php bloginfo('template_directory'); ?>/images//logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         <div class="collapse navbar-collapse   " id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto "> 
               
                <!-- Wp Bootstrap Nav Walker -->
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'ms-auto ',
                        'container_id'      => 'bootscore-navbar ',
                        'menu_class'        => 'nav navbar-nav justify-content-end  ',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
            </div> 
         </div> 
      </div>
    </nav>



    <!-- Navbar -->