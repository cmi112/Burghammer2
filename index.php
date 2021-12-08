<div class="container">

<?php get_header();?>
<?php 

/**
 * Main Template File.
 * 
 * @package Burghammer
 */
get_header();
;?>

<h1>This is Index page</h1>
<div class="container">


    <?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
<div class="row">
 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <div class="col"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <?php the_content('read more...'); ?>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
</div>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>















<?php get_footer();?>
</div>