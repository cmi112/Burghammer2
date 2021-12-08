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


 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js" integrity="sha512-nKZDK+ztK6Ug+2B6DZx+QtgeyAmo9YThZob8O3xgjqhw2IVQdAITFasl/jqbyDwclMkLXFOZRiytnUrXk/PM6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Tiny slider js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->

  
<script src="<?php bloginfo('template_directory'); ?>/script.js"></script>
  <!-- Show admin bar in front end when you login -->
  <?php wp_footer();?>

</body>

</html>