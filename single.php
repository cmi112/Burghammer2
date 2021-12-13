<?php
/**
 * Single Page.
 * 
 * @package Burghammer2
 */
 get_header(); 
 ?>
	

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if (has_post_thumbnail()):?>
        <img class="img-fluid rounded" src="<?php the_post_thumbnail_url('project-large');?>">

        <?php endif;?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><?php the_title(); ?></h2>


			
			<p>Single Page Default</p>
<?php the_content();?>
			<p>
				<span class="post-meta">Posted by <?php the_author(' ');?> on <?php the_time('F jS'); ?>
			</p>
				<br> 
				<?php the_tags(); ?>	
				<?php the_category(); ?>

			</span>

		</div><!-- .post --> 
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

	<?php comments_template( '', true );?>

				
<?php get_footer(); ?>	