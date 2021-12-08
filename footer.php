<?php 

/**
 * Footer Template.
 * 
 * @package Burghammer
 */

;?> 
 <!-- Footer -->
 <footer>
      <div>
        <p> Burghammer Landschaftsarchitektur &copy; <?php echo Date('Y');?> - <?php bloginfo('name');?></p>
      </div>
      <div>
        <!-- <a href="#">Datenschutz</a>
        <a href="#">Impressum</a> -->
        <!-- Footer Menu -->
<?php
    wp_nav_menu( array(
        'theme_location'    => 'secondary',
        'depth'             => 1,
        'container'         => 'div',
        'container_class'   => 'bs-footer-menu',
        'container_id'      => 'footer-menu',
        'menu_class'        => 'nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
    ) );
?>  
<!-- Footer Menu -->
      </div>
    </footer>

  </div>



  
<script src="<?php bloginfo('template_directory'); ?>/scripts.js"></script>
   <!-- Show admin bar in front end when you login -->
   <?php wp_footer();?>


</body>

</html>