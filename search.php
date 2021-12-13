<?php
get_header();
?>
    <h3>Search Results for '<?php echo get_search_query();?>'</h3>
<div class="row row-cols row-cols-sm-2 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 w-100" id="mix-wrapper">
   
        <div class="col">
            <div class="card mb-3" >
                <div class="card-body"> 
                    <img class="card-img-top" src="<?php the_post_thumbnail_url('project-large');?>">
                    <h5 class="card-title">
                        <?php the_title();?> 
                    </h5>
                    <p class="card-text"><?php the_excerpt();?></p>
                    <p><a href="<?php the_permalink();?>">Read More...</a></p>
                </div>
            </div>
        </div>



</div>
<?php previous_posts_link();?>
<?php next_posts_link();?>

<?php get_footer(); ?>