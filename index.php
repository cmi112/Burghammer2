

<?php get_header();?>
<?php 

/**
 * Main Template File.
 * 
 * @package Burghammer
 */
get_header();
;?>
<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
<div class="container">
<h1>All Posts </h1>
 <div class="row">
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

<div class="col">
  <div class="card-body">
  <img src="<?php the_post_thumbnail_url('project-large');?>" class="card-img-top" alt="...">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php the_excerpt();?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
  </div>
</div>
<?php endwhile; ?>
    <!-- end of the loop -->

 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>
</div>
<?php get_footer();?>